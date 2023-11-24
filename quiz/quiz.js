$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Domanda %current di %total',
  questions: [
    {
      'q': ' In che anni nasce la tuba?',
      'options': [
        'Strumento antichissimo al quale è difficile attribuire una data',
        '1935/1936',
        '1835/1836',
        '1897/1898'
      ],
      'correctIndex': 2,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': 'Quale strumento non appartiene alla famiglia della tuba?',
      'options': [
        'Cimbasso',
        'Susafono',
        'Trombone',
        'Euphonium'
      ],
      'correctIndex': 2,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': 'Verdi era un estimatore della Tuba?',
      'options': [
        'Sì, tanto da realizzarne una sua versione',
        'No, preferiva l’uso del Cimbasso',
        'No, preferiva l’uso dell’Oficleide',
        'Sì, ha composto numerosi concerti solistici per Tuba'
      ],
      'correctIndex': 1,
      'correctResponse': 'Corretto',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': ' Wagner era un estimatore della Tuba?',
      'options': [
        'Si, tanto da crearne una propria',
        'No, la definì “quel diavolo di bombardone”',
        'Sì, ma non integrò mai questo strumento nelle sue opere',
        'No, preferiva l’uso del Cimbasso'
      ],
      'correctIndex': 0,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': ' L’elemento che produce la vibrazione nella tuba:',
      'options': [
        'Il bocchino',
        'La campana',
        'Le labbra',
        'Una combinazione tra labbra e bocchino'
      ],
      'correctIndex': 3,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': ' Dove nasce la Tuba?',
      'options': [
        'Berlino',
        'Roma',
        'Praga',
        'Milano'
      ],
      'correctIndex': 0,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': '  Quale caratteristica dona un suono caldo e avvolgente alla Tuba?',
      'options': [
        'Il suo canneggio conico ',
        'Il bocchino',
        'La campana',
        'I cilindri'
      ],
      'correctIndex': 0,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': ' Quale strumento appartiene alla famiglia della Tuba pur avendo una storia separata da essa?',
      'options': [
        'Il Fagotto ',
        'Il Trombone',
        'L’Euphonium',
        ' Il Cimbasso'
      ],
      'correctIndex': 2,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': 'Chi ha inserito nella sua opera, per la prima volta, un duetto di Tuba?',
      'options': [
        'Berlioz',
        'Wagner',
        'Verdi',
        'Jacobs'
      ],
      'correctIndex': 2,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    },
    {
      'q': 'La didattica della Tuba è un insieme di nozioni:',
      'options': [
        'Puramente musicali',
        'Anatomiche e musicali',
        'Mediche e psicologiche',
        'Anatomiche e psicologiche'
      ],
      'correctIndex': 3,
      'correctResponse': 'Corretto!',
      'incorrectResponse': 'Sbagliato!'
    }
  ]
});
