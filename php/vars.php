<?php
  if (isset($_REQUEST['english'])) {
    $title                = 'Orange Human';
    $subtitle             = 'Creative and Motivated Developer';
    $perfil               = 'Profile';
    $experiencias         = 'Experiences';
    $habilidades          = 'Abilities';
    $projetos             = 'Projects';
    $contato              = 'Contact';
    $descperfil           = 'Junior developer hungry for knowledge';
    $descexperiencias     = 'Places I keep in my heart';
    $deschabilidades      = 'A little of what I know';
    $descprojetos         = 'A little bit of me out there';
    $desccontato          = 'Find me in the world';
    $sobremim             = 'About me';
    $sobre                = 'A lover of computing and the scientific world, I always look for new ways of learning. Interacting in groups is also part of my strength, for exchanging knowledge we become better beings';
    $detalhes             = 'Details';
    $nome                 = 'Name:';
    $meunome              = 'Carlos Eduardo da Silva Santos';
    $meunomecurto         = 'Carlos Eduardo';
    $idade                = 'Age:';
    $minhaidade           = '18yo';
    $localizacao          = 'Location:';
    $minhalocalizacao     = 'Campinas, Brazil, Earth';
    $idioma               = 'Versão em Português?';
    $idiomalink           = 'index.php';
    $curriculo            = 'Orange Human\'s Resume';


    $experienciasdados    = '[';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Educations":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Unicamp","period":"2017-Now","name":"Bachelor - Computer Science","desc":"A course that covers many topics of computing. Considered the best college in Latin America, and the best course evaluation in the country.","place":"Campinas - SP"},';
    $experienciasdados   .= '{"where":"Etec de Francisco Morato","period":"2014-2017","name":"Integrated Higher Education in Computer Science for the Internet","desc":"Where I learned the basis of what I know, programming logic and passion for technology.","place":"Francisco Morato - SP"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '},';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Careers":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Ofício GR","period":"2017-Now","name":"Junior Developer","desc":"Where I definitely put my knowledge into practice and learned from other members. Company responsible for putting me in the job market and providing leadership opportunities within the company, taking on important tasks from development to change of data on production servers","place":"Home Office","site":"http://www.oficiogr.com.br"},';
    $experienciasdados   .= '{"where":"Conpec","period":"2017-Now","name":"Project Advisor","desc":"Place that brought me opportunities to share what I know and learn more about the operation of consulting and entrepreneurship, I was responsible for applying some workshops on behalf of the company, as well as participating in several others","place":"Campinas - SP","site":"http://www.conpec.com.br"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '},';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Volunteer Works":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Etec de Francisco Morato","period":"2015-2017","name":"Help the school","desc":"General maintenance of computers, acting in the installation and maintenance of the various machines of the place, both in the hardware part as in the restructuring of the network and reformulation of the computer systems.","place":"Francisco Morato - SP"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '}';

    $experienciasdados   .= ']';


    $habilidadesdados     = '[';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Abilities":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"HTML","stars":"5"},';
    $habilidadesdados    .= '{"name":"CSS","stars":"4"},';
    $habilidadesdados    .= '{"name":"Bootstrap3","stars":"4"},';
    $habilidadesdados    .= '{"name":"GIT","stars":"4"},';
    $habilidadesdados    .= '{"name":"Jquery","stars":"4"},';
    $habilidadesdados    .= '{"name":"PHP","stars":"4"},';
    $habilidadesdados    .= '{"name":"Json","stars":"4"},';
    $habilidadesdados    .= '{"name":"SQL","stars":"4"},';
    $habilidadesdados    .= '{"name":"JavaScript","stars":"3"},';
    $habilidadesdados    .= '{"name":"Bootstrap4","stars":"3"},';
    $habilidadesdados    .= '{"name":"C","stars":"3"},';
    $habilidadesdados    .= '{"name":"C#","stars":"2"},';
    $habilidadesdados    .= '{"name":"Ionic","stars":"2"},';
    $habilidadesdados    .= '{"name":"Java","stars":"1"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '},';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Languages":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"Portuguese","stars":"5"},';
    $habilidadesdados    .= '{"name":"English","stars":"4"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '},';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Tools":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"Atom","stars":"5"},';
    $habilidadesdados    .= '{"name":"Windows","stars":"5"},';
    $habilidadesdados    .= '{"name":"Word","stars":"5"},';
    $habilidadesdados    .= '{"name":"Power Point","stars":"5"},';
    $habilidadesdados    .= '{"name":"Xampp","stars":"5"},';
    $habilidadesdados    .= '{"name":"Skype","stars":"5"},';
    $habilidadesdados    .= '{"name":"Slack","stars":"5"},';
    $habilidadesdados    .= '{"name":"Firefox","stars":"5"},';
    $habilidadesdados    .= '{"name":"Photoshop","stars":"4"},';
    $habilidadesdados    .= '{"name":"Sublime Text","stars":"4"},';
    $habilidadesdados    .= '{"name":"Linux","stars":"4"},';
    $habilidadesdados    .= '{"name":"WinSCP","stars":"4"},';
    $habilidadesdados    .= '{"name":"Filezilla","stars":"4"},';
    $habilidadesdados    .= '{"name":"Excel","stars":"4"},';
    $habilidadesdados    .= '{"name":"MySQLWorkbench","stars":"4"},';
    $habilidadesdados    .= '{"name":"PostMan","stars":"3"},';
    $habilidadesdados    .= '{"name":"Visual Studio","stars":"3"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '}';

    $habilidadesdados    .= ']';


    $projetosdados     = '[';
    $projetosdados    .= '{"name":"Orange Human\'s Resume","desc":"An interactive curriculum from which I have explored some of what I know, joining concepts of UI, UX and language change with PHP","img":"humanolaranja.jpg","url":"http://www.humanolaranja.com.br"},';
    $projetosdados    .= '{"name":"Conpec","desc":"Site of communication and contact of the first junior Computer company in the country","img":"conpec.jpg","url":"http://www.conpec.com.br"}';
    $projetosdados    .= ']';
  }
  else {
    $title                = 'Humano Laranja';
    $subtitle             = 'Desenvolvedor Criativo e Motivado';
    $perfil               = 'Perfil';
    $experiencias         = 'Experiências';
    $habilidades          = 'Habilidades';
    $projetos             = 'Projetos';
    $contato              = 'Contato';
    $descperfil           = 'Desenvolvedor Júnior com fome de conhecimento';
    $descexperiencias     = 'Lugares que guardo no coração';
    $deschabilidades      = 'Um pouco do que sei';
    $descprojetos         = 'Um pedacinho de mim por aí';
    $desccontato          = 'Me encontre pelo mundo';
    $sobremim             = 'Sobre mim';
    $sobre                = 'Amante da computação e do mundo científico, busco sempre maneiras novas de aprender. Interagir em grupos também faz parte do meu forte, pois trocando conhecimento nos tornamos seres melhores';
    $detalhes             = 'Detalhes';
    $nome                 = 'Nome:';
    $meunome              = 'Carlos Eduardo da Silva Santos';
    $meunomecurto         = 'Carlos Eduardo';
    $idade                = 'Idade:';
    $minhaidade           = '18 anos';
    $localizacao          = 'Localização';
    $minhalocalizacao     = 'Campinas, Brasil, Terra';
    $idioma               = 'English Version?';
    $idiomalink           = '?english';
    $curriculo            = 'Currículo Humano Laranja';


    $experienciasdados    = '[';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Educação":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Unicamp","period":"2017-Atualmente","name":"Bacharelado em Ciência da Computação","desc":"Um curso que abrange muitos temas das computação. Considerada a melhor faculdade da América Latina, e a melhor avaliação de curso no País.","place":"Campinas - SP"},';
    $experienciasdados   .= '{"where":"Etec de Francisco Morato","period":"2014-2017","name":"Ensino Médio Integrado ao Técnico em Informática para a Internet","desc":"Onde aprendi a base do que sei, lógica de programação e a paixão pela tecnologia.","place":"Francisco Morato - SP"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '},';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Carreiras":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Ofício GR","period":"2017-Atualmente","name":"Desenvolvedor Júnior","desc":"Onde definitivamente coloquei em prática meus conhecimentos e aprendi com outros membros. Empresa responsável por me colocar no mercado de trabalho e proporcionar oportunidades de liderança dentro da empresa, tomando frente em tarefas importantes, desde desenvolvimento à alteraçao de dados em servidores de produção","place":"Home Office","site":"http://www.oficiogr.com.br"},';
    $experienciasdados   .= '{"where":"Conpec","period":"2017-Atualmente","name":"Assessor de Projetos","desc":"Local que me trouxe oportunidades de compartilhar o que sei e aprender mais sobre o funcionamento de consultoria e empreendedorismo, fui responsável por aplicar alguns workshopsem nome da empresa, assim como participar de vários outros","place":"Campinas - SP","site":"http://www.conpec.com.br"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '},';

    $experienciasdados   .= '{';
    $experienciasdados   .= '"Trabalhos Voluntários":';
    $experienciasdados   .= '[';
    $experienciasdados   .= '{"where":"Etec de Francisco Morato","period":"2015-2017","name":"Ajudar a escola","desc":"Manutenção geral de computadores, atuando na instalação e manutenção das diversas máquinas do local, tanto na parte de hardware como na reestruturação da rede e reformulação dos sistemas dos computadores.","place":"Francisco Morato - SP"}';
    $experienciasdados   .= ']';
    $experienciasdados   .= '}';

    $experienciasdados   .= ']';


    $habilidadesdados     = '[';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Habilidades":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"HTML","stars":"5"},';
    $habilidadesdados    .= '{"name":"Bootstrap3","stars":"4"},';
    $habilidadesdados    .= '{"name":"CSS","stars":"4"},';
    $habilidadesdados    .= '{"name":"GIT","stars":"4"},';
    $habilidadesdados    .= '{"name":"Jquery","stars":"4"},';
    $habilidadesdados    .= '{"name":"PHP","stars":"4"},';
    $habilidadesdados    .= '{"name":"Json","stars":"4"},';
    $habilidadesdados    .= '{"name":"SQL","stars":"4"},';
    $habilidadesdados    .= '{"name":"JavaScript","stars":"3"},';
    $habilidadesdados    .= '{"name":"Bootstrap4","stars":"3"},';
    $habilidadesdados    .= '{"name":"C","stars":"3"},';
    $habilidadesdados    .= '{"name":"C#","stars":"2"},';
    $habilidadesdados    .= '{"name":"Ionic","stars":"2"},';
    $habilidadesdados    .= '{"name":"Java","stars":"1"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '},';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Idiomas":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"Português","stars":"5"},';
    $habilidadesdados    .= '{"name":"Inglês","stars":"4"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '},';

    $habilidadesdados    .= '{';
    $habilidadesdados    .= '"Ferramentas":';
    $habilidadesdados    .= '[';
    $habilidadesdados    .= '{"name":"Atom","stars":"5"},';
    $habilidadesdados    .= '{"name":"Windows","stars":"5"},';
    $habilidadesdados    .= '{"name":"Word","stars":"5"},';
    $habilidadesdados    .= '{"name":"Power Point","stars":"5"},';
    $habilidadesdados    .= '{"name":"Xampp","stars":"5"},';
    $habilidadesdados    .= '{"name":"Skype","stars":"5"},';
    $habilidadesdados    .= '{"name":"Slack","stars":"5"},';
    $habilidadesdados    .= '{"name":"Firefox","stars":"5"},';
    $habilidadesdados    .= '{"name":"Photoshop","stars":"4"},';
    $habilidadesdados    .= '{"name":"Sublime Text","stars":"4"},';
    $habilidadesdados    .= '{"name":"Linux","stars":"4"},';
    $habilidadesdados    .= '{"name":"WinSCP","stars":"4"},';
    $habilidadesdados    .= '{"name":"Filezilla","stars":"4"},';
    $habilidadesdados    .= '{"name":"Excel","stars":"4"},';
    $habilidadesdados    .= '{"name":"MySQLWorkbench","stars":"4"},';
    $habilidadesdados    .= '{"name":"PostMan","stars":"3"},';
    $habilidadesdados    .= '{"name":"Visual Studio","stars":"3"}';
    $habilidadesdados    .= ']';
    $habilidadesdados    .= '}';

    $habilidadesdados    .= ']';


    $projetosdados     = '[';
    $projetosdados    .= '{"name":"Currículo Humano Laranja","desc":"Um currículo interativo da qual eu explorei um pouco do que sei, juntando conceitos de UI, UX e alteração de idioma com PHP","img":"humanolaranja.jpg","url":"http://www.humanolaranja.com.br"},';
    $projetosdados    .= '{"name":"Conpec","desc":"Site de divulgação e contato da primeira empresa júnior de Computação no país","img":"conpec.jpg","url":"http://www.conpec.com.br"}';
    $projetosdados    .= ']';
  }
?>
