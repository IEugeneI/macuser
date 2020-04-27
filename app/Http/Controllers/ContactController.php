<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\CreateContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;

    /**
     * ContactController constructor.
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $contacts = $this->contact->with('phones')->get();
        return view('welcome')->with(['contacts' => $contacts]);
    }

    /**
     * @param $contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($contact)
    {
        $contac = $this->contact->with('phones')->findOrFail($contact);
        return view('contacts.edit')->with(['contact' => $contac]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(CreateContact $request)
    {
        $contact = $this->contact::create($request->all());
        return view('phones.create')->with(['id' => $contact->id]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        $contact = $this->contact->findOrFail($id);
        $contact->fill($request->all())->save();
        return $this->index()->with(['status' => 'Profile updated!']);
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $contact = $this->contact->find($id);
        $contact->delete();
        return $this->index()->with(['status' => 'Profile deleted!']);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info($id)
    {
        $contact = $this->contact->with('phones')->findOrFail($id);
        return view('contacts.info')->with(['contact' => $contact]);
    }
}
