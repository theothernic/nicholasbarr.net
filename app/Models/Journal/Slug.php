<?php
    namespace App\Models\Journal;

    use Illuminate\Database\Eloquent\Model;

    class Slug extends Model
    {
        public function entry()
        {
            return $this->belongsTo(Entry::class);
        }
    }
