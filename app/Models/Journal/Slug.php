<?php
    namespace App\Models\Journal;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Slug extends Model
    {
        use HasUuids, SoftDeletes;

        public function entry()
        {
            return $this->belongsTo(Entry::class);
        }
    }
