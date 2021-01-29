<?php

namespace App\Http\Controllers;

use App\Mail\MailReceived;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
//use Monolog\Handler\SendGridHandler;
//use SendGrid\Mail\Mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\SendEmail;
//use Vansteen\Sendinblue\Facades\Sendinblue;
//use Vansteen\Sendinblue\Sendinblue;
//use Vansteen\SendinBlue\Client;


class MessageController extends Controller
{
    public function storage(Request $request){

        //$recaptcha = $request['g-recaptcha-response'];
	//ddd($request);
        $validator = request()->validate(
            [
            'g-recaptcha-response' => ['recaptcha'],
        ]
        );

        if (isset($validator['g-recaptcha-response'])) {
        $captcha = $validator['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
        'secret' => env('RECAPTCHA_SECRET_KEY'), //\Config::get('app.key'), //'6LfHuMQZAAAAAIJ6SWSWkLDeY-RjflUyYiOdOCjv',
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
        );
	//ddd($data);
        $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
        }
	//dd($response);

        //$jsonResponse = json_decode($response);
      	$captcha_success = json_decode($response);

	//dd($captcha_success);
	//dd($captcha_success);

        //ddd($captcha_success);


        // Verificamos si hay algún error
        //ddd($validator);
        //ddd($validator);

      	if ($captcha_success) {
      	    //ddd();
            $message = request()->validate([
                'name' => ['required'],
                'email' => ['required', 'email'],
                'subject' => ['required'],
                'message' => ['required']
            ]);


            $mail_data = new MailReceived($message);

          //dd( $mail_data-> );
          //dd($mail_data->render());


          //return new MailReceived($message);
          Mail::to('angelsuminoe01@gmail.com')->queue(new MailReceived($message));

          /*$email = new \SendGrid\Mail\Mail();
          $email->setFrom("contacto@angelalvarado.cf", "Contacto");
          $email->setSubject("Mensaje de contacto de ".$message['email']);
          $email->addTo("angel.alvarado.dev@gmail.com");
          //$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
          $email->addContent(
              "text/html", (string) $mail_data->render()
          );
          $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
          try {
              $response = $sendgrid->send($email);
              //print $response->statusCode() . "\n";
              //print_r($response->headers());
              //print $response->body() . "\n";
          } catch (Exception $e) {
              echo 'Caught exception: '. $e->getMessage() ."\n";
          }
          */


            return redirect()->back()->with('status', 'Message send successfully, we reply you within the next 24 hours');

      }
      else
      {
        return redirect()->back()->with('status', 'Error, fill the captcha please');
      }
    }

    public function style(Request $request) {
        return route('css/app.css');
    }
}
