<?php

namespace Vcian\EBusinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class EBusinessCardController extends Controller
{
    public function index()
    {
        return redirect()->route('ebusinesscard.create');
    }

    public function create()
    {
        $ebusinesscards = EBusinessCard::all();
        $submit = 'Add';
        return view('vendor.vcian.ebusinesscard.list', compact('ebusinesscards', 'submit'));
    }

    public function store()
    {
        $input = Request::all();
        EBusinessCard::create($input);
        return redirect()->route('ebusinesscard.create');
    }

    public function edit($id)
    {
        $ebusinesscards = EBusinessCard::all();
        $ebusinesscard = $ebusinesscards->find($id);
        $submit = 'Update';
        return view('vendor.vcian.ebusinesscard.list', compact('ebusinesscards', 'ebusinesscard', 'submit'));
    }

    public function update($id)
    {
        $input = Request::all();
        $ebusinesscard = EBusinessCard::findOrFail($id);
        $ebusinesscard->update($input);
        return redirect()->route('ebusinesscard.create');
    }

    public function destroy($id)
    {
        $ebusinesscard = EBusinessCard::findOrFail($id);
        $ebusinesscard->delete();
        return redirect()->route('ebusinesscard.create');
    }
}
