<?php 

$db = new PDO('sqlite:database.sqlite');

$query = $db->query("SELECT * FROM livros");

dd(
    $query->fetchAll()
);

$livros = [
    [
        'id' => 1,
        'titulo' => 'Senhor dos Anéis',
        'autor' => 'J.R.R. Tolkien',
        'Descrição' => 'A obra-prima de Tolkien que narra a jornada épica de Frodo Bolseiro, um hobbit que, junto a um grupo de heróis, deve destruir o Um Anel, uma relíquia de poder absoluto. Ambientada na Terra-média, a série é conhecida por sua vasta mitologia, personagens memoráveis e luta entre o bem e o mal.'
    ],
    [
        'id' => 2,
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'Descrição' => 'Publicada em 1949, esta distopia de Orwell apresenta um mundo totalitário onde a vigilância e o controle social são extremos. O protagonista, Winston Smith, trabalha para o governo e começa a questionar a opressão. A obra aborda temas como censura, manipulação da verdade e liberdade individual.'
    ],
    [
        'id' => 3,
        'titulo' => 'Dom Quixote',
        'autor' => 'Miguel de Cervantes',
        'Descrição' => 'Considerado um dos maiores clássicos da literatura mundial, "Dom Quixote" segue as aventuras de um homem que, obcecado por livros de cavalaria, decide se tornar um cavaleiro andante. A história mistura humor, crítica social e reflexão sobre a realidade e a fantasia.'
    ],
    [
        'id' => 4,
        'titulo' => 'O Grande Gatsby',
        'autor' => 'F. Scott Fitzgerald',
        'Descrição' => 'Ambientado na década de 1920, o romance de Fitzgerald narra a vida do misterioso Jay Gatsby, um milionário que tenta recuperar o amor de Daisy Buchanan. A obra é um comentário sobre o sonho americano, o materialismo e a busca incessante por felicidade.'
    ],
    [
        'id' => 5,
        'titulo' => 'O Alquimista',
        'autor' => 'Paulo Coelho',
        'Descrição' => 'Uma história inspiradora sobre um jovem pastor chamado Santiago, que embarca em uma jornada pelo deserto em busca de um tesouro. Durante sua jornada, ele aprende lições profundas sobre sonhos, destino e a importância de seguir o coração.'
    ],
    [
        'id' => 6,
        'titulo' => 'Cem Anos de Solidão',
        'autor' => 'Gabriel García Márquez',
        'Descrição' => 'Este clássico do realismo mágico conta a história da família Buendía, cuja saga se passa na fictícia Macondo. A obra é uma reflexão sobre o tempo, a solidão e os ciclos da história, sendo uma das mais importantes da literatura latino-americana.'
    ],
    [
        'id' => 7,
        'titulo' => 'Harry Potter e a Pedra Filosofal',
        'autor' => 'J.K. Rowling',
        'Descrição' => 'O primeiro livro da famosa saga de Harry Potter apresenta o jovem bruxo que descobre ser um dos escolhidos para derrotar o mal. A obra se passa em um mundo mágico, onde Harry e seus amigos enfrentam desafios, descobrem mistérios e aprendem lições valiosas sobre amizade e coragem.'
    ],
    [
        'id' => 8,
        'titulo' => 'O Processo',
        'autor' => 'Franz Kafka',
        'Descrição' => 'Este romance filosófico segue a vida de Josef K., um homem que é acusado de um crime que ele desconhece. Ao longo da obra, Kafka explora temas como a burocracia, a alienação e a impotência do indivíduo frente a um sistema judicial e social opressor.'
    ],
    [
        'id' => 9,
        'titulo' => 'Matar um Rouxinol',
        'autor' => 'Harper Lee',
        'Descrição' => 'Situado no sul dos Estados Unidos durante a Grande Depressão, o livro segue a história de Scout Finch, uma jovem que testemunha os desafios de seu pai, o advogado Atticus Finch, enquanto defende um homem negro acusado de estuprar uma mulher branca. A obra trata de temas como racismo, injustiça e moralidade.'
    ],
    [
        'id' => 10,
        'titulo' => 'A Montanha Mágica',
        'autor' => 'Thomas Mann',
        'Descrição' => 'Situado em um sanatório nos Alpes Suíços, o romance de Mann segue Hans Castorp, um jovem que vai visitar seu primo, mas acaba se tornando um paciente no local. A história é uma profunda meditação sobre a vida, a morte e o sentido da existência, e também uma crítica à sociedade europeia pré-Primeira Guerra Mundial.'
    ]
];

?>