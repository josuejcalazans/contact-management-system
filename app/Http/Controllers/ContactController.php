<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contacts = $this->contactService->getAllContacts();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $this->contactService->createContact($request->validated());
        return response()->json(['message' => 'Contact created successfully.'], 201);
    }

    public function edit(int $id)
    {
        $contact = $this->contactService->getContact($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, int $id)
    {
        $this->contactService->updateContact($id, $request->validated());
        return response()->json(['message' => 'Contact updated successfully.'], 204);
    }

    public function destroy(int $id)
    {
        $this->contactService->deleteContact($id);
        return response()->json(['message' => 'Contact deleted successfully.'], 204);
    }
}