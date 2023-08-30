<?php
    namespace App\Models\Journal;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Revision extends Model
    {
        use HasUuids, SoftDeletes;

        protected $keyType = 'string';
    }
