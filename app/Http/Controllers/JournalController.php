<?php
    namespace App\Http\Controllers;

    use App\Services\JournalService;
    use App\ViewModels\Page;

    class JournalController
    {
        private JournalService $journalService;

        public function __construct(JournalService $journalService)
        {
            $this->journalService = $journalService;
        }

        public function index()
        {
            $record = $this->journalService->latest();


            $page = new Page([
                'title' => (is_null($record)) ? 'An empty journal.' : $record->title
            ]);

            return view('journal.index', compact('page', 'record'));
        }

        public function single()
        {
            return view('journal.single');
        }
    }
