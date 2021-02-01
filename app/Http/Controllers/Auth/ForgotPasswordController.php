<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use DB;
use Carbon\Carbon;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    // public function sendPasswordResetToken(Request $request)
    // {
    // //    dd( str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT));
    //     $user = User::where('email', $request->phone)->first();
      
    //     if ( !$user ) return redirect()->back()->withErrors(['error' => '404']);
    
    //     //create a new token to be sent to the user. 
    //     DB::table('password_resets')->insert([
    //         'email' => $request->phone,
    //         'token' => str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT), //change 60 to any length you want
    //         'created_at' => Carbon::now()
    //     ]);
    
    //     $tokenData = DB::table('password_resets')
    //     ->where('email', $request->phone)->first();
    
    //    $token = $tokenData->token;
    //    dd( $token);
    //    $email = $request->phone; // or $email = $tokenData->email;
    
    //    /**
    //     * Send email to the email above with a link to your password reset
    //     * something like url('password-reset/' . $token)
    //     * Sending email varies according to your Laravel version. Very easy to implement
    //     */
    // }
    


//     public function showForm()
//     {
        
//         return redirect('password/reset')->withStatus(__(''));
//     }
   
//     public function showPasswordResetForm()
//     {
//         return redirect('reset-password/')->withStatus(__(''));
        
//     }
//     public function resetPassword()
//     {
//         return redirect('reset-password/')->withStatus(__(''));
        
//     }
//     public function textSms(){
//         $message = 'hiii';
//         $id= '1';
//         $url = 'https://fcm.googleapis.com/fcm/send';

//         $fields = array (
//                 'registration_ids' => array (
//                         $id
//                 ),
//                 'data' => array (
//                         "message" => $message
//                 )
//         );
//         $fields = json_encode ( $fields );
    
//         $headers = array (
//                 'Authorization: key=' . "AAAAwZ_ueOk:APA91bETf-fDSLlAX0fJnqD2JzIuDL6jdw2z7PWOxFXPe_JT1hVtUFfD9lw-QHsJE6-NcY2RpnygIjPygqKb2nNNQ9Ko4uo6w4WphpvtNL-zhFY8n2DS8Cxkx5t6Oq93CN29pD4JH0RC",
//                 'Content-Type: application/json'
//         );
    
//         $ch = curl_init ();
//         curl_setopt ( $ch, CURLOPT_URL, $url );
//         curl_setopt ( $ch, CURLOPT_POST, true );
//         curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
//         curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
//         curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
    
//         $result = curl_exec ( $ch );
//         echo $result;
//         curl_close ( $ch );
//     }
}
