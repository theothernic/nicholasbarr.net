<?php
    namespace App\ViewModels;

    class Page
    {
        public string $title = '';

        public function __construct(array $data = [])
        {
            $this->hydrate($data);
        }


        public function hydrate(array $data = []): void
        {
            foreach($data as $k => $v)
            {
                if (property_exists($this, $k))
                    $this->$k = $v;
            }
        }
    }
