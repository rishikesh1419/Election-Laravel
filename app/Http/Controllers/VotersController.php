<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voter;
use finfo;
use PDF;

class VotersController extends Controller
{
    public function register() {
        return view('register');
    }

    public function results(Request $request) {
        $this->validate($request, [
            'gname' => 'required|max:50',
            'mname' => 'required|max:50',
            'lname' => 'required|max:50',
            'pincode' => 'required|regex:/[0-9]{6}/'
        ]);

        $voters = Voter::where([['gname','=',$request->get('gname')],['mname','=',$request->get('mname')],['lname','=',$request->get('lname')],['pincode','=',$request->get('pincode')]])->paginate(1);
        
        if(count($voters) > 0) {
            for($i=0; $i < count($voters); $i++) {
                $voters[$i]->photo = response()->make($voters[$i]->photo, 200, array(
                    'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($voters[$i]->photo)));
            }
            return view('results')->with('voters',$voters);
        }
        return redirect('/search')->with('error', 'No voter found!');
    }

    public function search() {
            return view('search');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'gname' => 'required|max:50',
            'mname' => 'required|max:50',
            'lname' => 'required|max:50',
            'fname' => 'required|max:100',
            'address1' => 'required|max:150',
            'aadhaar' => 'required|max:12|regex:/[0-9]{12}/',
            'dob' => 'required',
            'pincode' => 'required|max:6|regex:/[0-9]{6}/',
            'photo' => 'required|max:200'
        ]);

        $voter = new Voter; 

        $voter->gname = $request->input('gname');
        $voter->mname = $request->input('mname');
        $voter->lname = $request->input('lname');
        $voter->fname = $request->input('fname');
        $voter->aadhaar = $request->input('aadhaar');
        $voter->address1 = $request->input('address1');
        $voter->pincode = $request->input('pincode');
        $voter->dob = $request->input('dob');
        $photo = $request->file('photo');
        $photocontents = $photo->openFile()->fread($photo->getSize());
        $voter->photo = $photocontents;

        $voter->save();

        return redirect('/')->with('success', "Voter registered!");
    }

    public function getId($id) {
        $voter = Voter::find($id);
        $pdf = PDF::loadView('id', compact('voter'));
        return $pdf->download('voter.pdf');
    }
}
