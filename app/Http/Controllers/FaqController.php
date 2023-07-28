<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function getCreateFaqPage(){
        $faqs = Faq::all();
        return view('create-faq', ['faqs' => $faqs]);
    }

    public function createFaq(Request $request){

        Faq::create([
            'faq_answer' => $request->faq_answer,
            'faq_question' => $request->faq_question,
        ]);

        return redirect(route('getFaqs'));
    }

    public function getFaqs(){
        $faqs = Faq::all();
        return view('create-faq', ['faqs' => $faqs]);
    }

    public function getFaqsMangkas(){
        $faqs = Faq::all();
        return view('user-faq', ['faqs' => $faqs]);
    }

    public function deleteFaq($id){
        Faq::destroy($id);

        return redirect(route('getFaqs'));
    }

}
