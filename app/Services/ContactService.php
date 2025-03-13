<?php
namespace App\Services;

use App\Interfaces\ContactRepositoryInterface;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getAllContacts()
    {
        return $this->contactRepository->all();
    }

    public function getContact(int $id)
    {
        return $this->contactRepository->find($id);
    }

    public function createContact(array $data)
    {
        return $this->contactRepository->create($data);
    }

    public function updateContact(int $id, array $data)
    {
        return $this->contactRepository->update($id, $data);
    }

    public function deleteContact(int $id)
    {
        return $this->contactRepository->delete($id);
    }
}