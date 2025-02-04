<<<<<<< HEAD
<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Righe Import Fallite',
        'plural' => 'Righe Import Fallite',
        'group' => [
            'name' => 'Import/Export',
            'description' => 'Gestione delle righe di importazione fallite',
        ],
        'label' => 'righe import fallite',
        'sort' => 82,
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
        ],
        'import_id' => [
            'label' => 'ID Importazione',
        ],
        'row_number' => 'Numero Riga',
        'data' => [
            'label' => 'Dati',
        ],
        'errors' => 'Errori',
        'created_at' => [
            'label' => 'Creato il',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
        ],
        'resolved_at' => 'Risolto il',
        'resolved_by' => 'Risolto da',
        'resolution_notes' => 'Note Risoluzione',
        'status' => 'Stato',
        'validation_error' => [
            'label' => 'validation_error',
        ],
    ],
    'actions' => [
        'resolve' => [
            'label' => 'Risolvi',
            'modal' => [
                'heading' => 'Risolvi Errore',
                'description' => 'Inserisci i dati corretti per risolvere l\'errore',
            ],
            'messages' => [
                'success' => 'Errore risolto con successo',
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'modal' => [
                'heading' => 'Riprova Importazione',
                'description' => 'Vuoi riprovare l\'importazione di questa riga?',
            ],
            'messages' => [
                'success' => 'Riga importata con successo',
            ],
        ],
        'skip' => [
            'label' => 'Salta',
            'modal' => [
                'heading' => 'Salta Riga',
                'description' => 'Sei sicuro di voler saltare questa riga?',
            ],
            'messages' => [
                'success' => 'Riga saltata con successo',
            ],
        ],
        'bulk_resolve' => [
            'label' => 'Risolvi Selezionati',
            'modal' => [
                'heading' => 'Risolvi Errori Selezionati',
                'description' => 'Vuoi risolvere tutti gli errori selezionati?',
            ],
            'messages' => [
                'success' => 'Errori risolti con successo',
            ],
        ],
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
    ],
    'messages' => [
        'no_failed_rows' => 'Nessuna riga fallita',
        'row_resolved' => 'Riga risolta con successo',
        'row_retried' => 'Riga riprovata con successo',
        'row_skipped' => 'Riga saltata',
        'multiple_resolved' => ':count righe risolte con successo',
    ],
    'statuses' => [
        'pending' => 'In Attesa',
        'resolved' => 'Risolto',
        'skipped' => 'Saltato',
        'retried' => 'Riprovato',
    ],
    'error_types' => [
        'validation' => 'Errore di Validazione',
        'data_format' => 'Formato Dati Errato',
        'missing_data' => 'Dati Mancanti',
        'duplicate' => 'Dato Duplicato',
        'reference' => 'Riferimento Non Trovato',
        'system' => 'Errore di Sistema',
    ],
    'model' => [
        'label' => 'failed import row.model',
    ],
    'plural' => [
        'model' => [
            'label' => 'failed import row.plural.model',
        ],
    ],
];
=======
<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Righe Import Fallite',
    'plural' => 'Righe Import Fallite',
    'group' => 
    array (
      'name' => 'Import/Export',
      'description' => 'Gestione delle righe di importazione fallite',
    ),
    'label' => 'righe import fallite',
    'sort' => 42,
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
    ),
    'import_id' => 
    array (
      'label' => 'ID Importazione',
    ),
    'row_number' => 'Numero Riga',
    'data' => 
    array (
      'label' => 'Dati',
    ),
    'errors' => 'Errori',
    'created_at' => 
    array (
      'label' => 'Creato il',
    ),
    'updated_at' => 
    array (
      'label' => 'Aggiornato il',
    ),
    'resolved_at' => 'Risolto il',
    'resolved_by' => 'Risolto da',
    'resolution_notes' => 'Note Risoluzione',
    'status' => 'Stato',
    'validation_error' => 
    array (
      'label' => 'validation_error',
    ),
  ),
  'actions' => 
  array (
    'resolve' => 
    array (
      'label' => 'Risolvi',
      'modal' => 
      array (
        'heading' => 'Risolvi Errore',
        'description' => 'Inserisci i dati corretti per risolvere l\'errore',
      ),
      'messages' => 
      array (
        'success' => 'Errore risolto con successo',
      ),
    ),
    'retry' => 
    array (
      'label' => 'Riprova',
      'modal' => 
      array (
        'heading' => 'Riprova Importazione',
        'description' => 'Vuoi riprovare l\'importazione di questa riga?',
      ),
      'messages' => 
      array (
        'success' => 'Riga importata con successo',
      ),
    ),
    'skip' => 
    array (
      'label' => 'Salta',
      'modal' => 
      array (
        'heading' => 'Salta Riga',
        'description' => 'Sei sicuro di voler saltare questa riga?',
      ),
      'messages' => 
      array (
        'success' => 'Riga saltata con successo',
      ),
    ),
    'bulk_resolve' => 
    array (
      'label' => 'Risolvi Selezionati',
      'modal' => 
      array (
        'heading' => 'Risolvi Errori Selezionati',
        'description' => 'Vuoi risolvere tutti gli errori selezionati?',
      ),
      'messages' => 
      array (
        'success' => 'Errori risolti con successo',
      ),
    ),
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
  ),
  'messages' => 
  array (
    'no_failed_rows' => 'Nessuna riga fallita',
    'row_resolved' => 'Riga risolta con successo',
    'row_retried' => 'Riga riprovata con successo',
    'row_skipped' => 'Riga saltata',
    'multiple_resolved' => ':count righe risolte con successo',
  ),
  'statuses' => 
  array (
    'pending' => 'In Attesa',
    'resolved' => 'Risolto',
    'skipped' => 'Saltato',
    'retried' => 'Riprovato',
  ),
  'error_types' => 
  array (
    'validation' => 'Errore di Validazione',
    'data_format' => 'Formato Dati Errato',
    'missing_data' => 'Dati Mancanti',
    'duplicate' => 'Dato Duplicato',
    'reference' => 'Riferimento Non Trovato',
    'system' => 'Errore di Sistema',
  ),
  'model' => 
  array (
    'label' => 'failed import row.model',
  ),
  'plural' => 
  array (
    'model' => 
    array (
      'label' => 'failed import row.plural.model',
    ),
  ),
);
>>>>>>> origin/dev
