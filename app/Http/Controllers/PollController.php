<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function poll_page(){
        $poll = Poll::all();
        return view('backend.poll.poll')->with('poll', $poll);
    }

    public function add_poll_page(){
        return view('backend.poll.add_poll');
    }

    public function poll_action(Request $request){
       
         $request->validate([
            'title' => 'required',
        ]);
        
        $poll = new Poll();
        $poll->status = $request->status;
        $poll->title = $request->title;
        $poll->yes_poll = $request->yes_poll;
        $poll->no_poll = $request->no_poll;
        $poll->no_comment_poll = $request->no_comment_poll;
        $poll->save();
        return redirect()->route('poll');
    }

    public function delete_poll($id){
        Poll::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edit_poll($id){
        $poll = Poll::findOrFail($id);
        return view('backend.poll.edit_poll')->with('poll', $poll);
    }

    public function edit_poll_action(Request $request){
        $poll = Poll::findOrFail($request->id);
        if($request->status){
           $poll->status = $request->status;
        }
        if($request->title){
           $poll->title = $request->title;
        }
        if($request->yes_poll){
           $poll->yes_poll = $request->yes_poll;
        }
        if($request->no_poll){
           $poll->no_poll = $request->no_poll;
        }
        if($request->no_comment_poll){
           $poll->no_comment_poll = $request->no_comment_poll;
        }
        $poll->save();
        return redirect()->route('poll');
    }
}
