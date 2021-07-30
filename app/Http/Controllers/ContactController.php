<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        Contact::saveContact($request);

        return redirect()->route('messages_all')->with('success', 'Сообщение было добавлено');
    }

    public function allDate()
    {
        $contact = new Contact;
        // $data = $contact->orderBy('id', 'desc')->skip(1)->take(2)->get();
        // $data = $contact->where('id', '=', '2')->get();
        $data = $contact->all();
        return view('messages', ['data' => $data]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact;
        $item = $contact->find($id);

        return view('message', ['element' => $item]);
    }

    public function updateOneMessage($id)
    {
        $contact = new Contact;
        $item = $contact->find($id);

        return view('update_message', ['element' => $item]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        Contact::updateContact($id, $request);

        return redirect()->route('message_one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessageSubmit($id)
    {
        if (Contact::deleteContact($id)) {
            return redirect()->route('messages_all', $id)->with('success', 'Сообщение было удалено');
        }
    }
}
