<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;

class FormPdfEmailController extends Controller
{

    public function generate(Request $request)
    {
        $data = $request->all();
        $pdf = PDF::loadView('mails.mail', compact('data'));
        try{
            Mail::send('mails.mail', compact('data'), function ( $message) use ( $data, $pdf) {
            $message
                ->to($data['email'], $data['name'])
                ->replyTo('quizstarmobile@gmail.com', 'QuizKing')
                ->subject($data['subject'])
                ->attachData($pdf->output(), "attachment.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";

        }else{

           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
           $this->data        =   $data;
        }
        return response()->json(compact('this'));
    }
}
