<?php
    namespace App\Models\Journal;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;

    class Entry extends Model
    {
        use HasUuids;

        protected $keyType = 'string';

        public function revisions()
        {
            return $this->hasMany(Revision::class);
        }
    }
