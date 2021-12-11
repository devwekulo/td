<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function organization()
    {
        return $this->belongsTo(Client::class);
    }

    // can access an organization from here
    public function getOrganizationBelongingToClient()
    {
        $organization = Client::find(1);

        //Gives organization name the client belongs to
        return $organization->client->name;
    }
}
