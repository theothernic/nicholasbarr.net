<?php
    namespace App\Models\Journal;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;

    class Revision extends Model
    {
        use HasUuids;

        protected $keyType = 'string';
    }
