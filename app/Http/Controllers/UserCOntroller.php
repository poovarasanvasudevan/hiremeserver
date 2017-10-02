<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    //

    function register(Request $request)
    {

        $user = User::firstOrNew(array('email' => request()->input('email')));
        $user->email = request()->input('email');
        $user->name = \request()->input('name');
        $user->password = md5('password');


        if ($userID = $user->save()) {
            if ($user->user_detail == null) {
                $userDetail = new UserDetail();
            } else {
                $userDetail = $user->user_detail;
            }


            if ($request->has('profile_pic')) {
                $profilePic = \request()->file('profile_pic');
                $pic_name = md5(request()->input('email')) . '.' . $profilePic->getClientOriginalExtension();

                if ($profilePic->move(public_path('profilepic'), $pic_name)) {
                    $userDetail->profile_pic = "/profilepic/" . $pic_name;
                }
            }
            if ($request->has('cover_pic')) {
                $profilePic = \request()->file('cover_pic');
                $pic_name = md5(request()->input('email')) . '.' . $profilePic->getClientOriginalExtension();

                if ($profilePic->move(public_path('coverpic'), $pic_name)) {
                    $userDetail->cover_pic = "/coverpic/" . $pic_name;
                }
            }


            $userDetail->phone = \request()->input('phone');
            $userDetail->whatsapp = \request()->input('whatsapp');
            $userDetail->about_me = \request()->input('about_me');

            $user->user_detail()->save($userDetail);
        }

        return response()
            ->json([
                'success' => true,
                'user' => $user,
                'user_detail' => $user->user_detail
            ]);
    }

    public function me()
    {
        $email = \request()->input('email');

        $user = User::whereEmail($email)->first();
        return response()->json([
            'user' => $user,
            'detail' => $user->user_detail,
        ]);
    }

    public function workers()
    {
        $workers = Work::all();
        return response()->json($workers);
    }

    public function addSkills()
    {
        $user = User::whereEmail(\request()->input("email"))->first();
        $skill = Work::find(\request()->input("work_id"));


        $user->works()->detach(\request()->input("work_id"));


        $user->works()->attach(\request()->input("work_id"), [
            'payment_id' => \request()->input("payment_id"),
            'description' => \request()->input("description"),
            'expiry_date' => Carbon::now()->addMonth(1)
        ]);
		
		$res = array(
			'result' => true,
			'skills' => $user->works
		);

        return response()->json($res);

    }


}
