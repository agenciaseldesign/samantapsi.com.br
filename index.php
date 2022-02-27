<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicóloga Samanta Perez - Site Oficial</title>
    <!-- Importação do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Importação do JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<!-- Header da Página -->
<nav class="navbar navbar-expand-lg navbar-light bg menu fixed-top textoMenu">
  <a class="navbar-brand" href="#"><span class="textoMenucor">samantapsi.com.br</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal"><span class="textoMenucor"><i class="bi bi-calendar3"></i> Agendar</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#servicos"><span class="textoMenucor"><i class="bi bi-card-list"></i> Serviços</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#galeria"><span class="textoMenucor"><i class="bi bi-image"></i> Galeria</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#depoimento"><span class="textoMenucor"><i class="bi bi-chat-dots"></i> Depoimento</span></a>
      </li>
    </ul>
    <span class="navbar-text">
    <span class="textoMenucor">Atendimento Online</span>
    </span>
  </div>
</nav>
<!-- Header da Página -->
<section class="container ">
    <h1 class="samanta">Samanta Perez Santos</h1>
</section>

<section class="container">
    <img src="pictures/samanta_hero.jpg" class="hero img-fluid small_img" width="100%">
</section>

<section class="container">
    <p class="atendimento">Atendimento On-line | Adolescentes, adultos, gestantes e mulheres no pós-parto | Psicoterapia | 
    Orientação Profissional | <br/>CRP 06/157974 Aberto de Segunda á Sexta até 20:00.</p>
</section>

<section class="container">
    <button type="button" class="btn btn-outline-success bot_whats" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-calendar3"></i> Agendar</button>
</section>

<!-- Depoimentos da Página -->

<section class="container depoimento">
    <h1 class="h" id="depoimento">Depoimentos</h1>
    <hr class="style18">
</section>



<!-- Serviços da Página -->
<h1 class="h" id="servicos">Serviços</h1>
<div class="container"><hr class="style18"></div>
<section class="container centralizar">



        <div class="row centralizar">
            <div class="card_img" style="text-align: center; background-color:#FFE4E1;padding: 15px;">
                <img src="pictures/psicologia.png" style="display: block;margin: 0 auto; opacity: 100%; width: 40px; margin-bottom:10px;">
                <h5 class="textoMenu"><b>Psicoterapias:</b></h5>
                <p style="text-align:justify;">A técnica utilizada é de Psicoterapia de orientação psicanalítica.  As sessões se tornam uma parada para escutar a si mesmo e 
                  refletir com maior profundidade as circunstâncias do cotidiano. Podendo haver uma ampliação da 
                  compreensão sobre suas dúvidas, seus sentimentos, desejos e angústias e conflitos inconscientes.
                  <a href="#" data-toggle="modal" data-target="#psicoterapia">Leia..</a>
                </p>
            </div>
            <div class="card_img " style="text-align: center;background-color:#FFF0F5;padding: 15px;">
            <img src="pictures/psicologia.png" style="display: block;margin: 0 auto; opacity: 100%; width: 40px; margin-bottom:10px; border-radius:10px;">
            <h5 class="textoMenu"><b>Serviços de prevenção</b></h5>
            <p style="text-align:justify;">O objetivo desse programa é propiciar a facilitação ao autoconhecimento de forma breve, pois são em torno de 4 encontros online.  
              Através das atividades propostas o participante poderá se conectar com suas habilidades e alguns aspectos de sua personalidade, bem como a 
              avaliação da saúde emocional atual.
              <a href="#" data-toggle="modal" data-target="#prevencao">Leia..</a>
            </p>
            </div>
            <div class="card_img " style="text-align: center;background-color:#D8BFD8; padding: 15px;">
            <img src="pictures/psicologia.png" style="display: block;margin: 0 auto; opacity: 100%; width: 40px; margin-bottom:10px;">
            <h5 class="textoMenu"><b>Orientação Profis/Carreira</b></h5>
            <p style="text-align:justify;">Orientação de carreira possibilitam um autoconhecimento pessoal e profissional para te 
              auxiliar melhor em suas escolhas profissionais. Durante o processo da orientação vamos alinhando juntos as suas características de sua personalidade, 
              bem como suas habilidades e aptidões, seus desejos e experiências de vida.
              <a href="#" data-toggle="modal" data-target="#orientacao">Leia..</a>
            </p>
            </div>
        </div>
</section>

<!-- Galeria da Página -->
<h1 class="h" id="galeria">Galeria</h1>
<section class="container">
  <hr class="style18">
<div>
        <div class="row">
            <div class="card_img">
                <img src="pictures/samanta.jpg" class="small_img">
            </div>
            <div class="card_img">
                <img src="pictures/samanta2.jpg" class="small_img">
            </div>
            <div class="card_img">
                <img src="pictures/samanta3.jpg" class="small_img">
            </div>
        </div>
        <div class="row">
            <div class="card_img">
                <img src="pictures/samanta.jpg" class="small_img">
            </div>
            <div class="card_img">
                <img src="pictures/samanta2.jpg" class="small_img">
            </div>
            <div class="card_img">
                <img src="pictures/samanta3.jpg" class="small_img">
            </div>
        </div>
  </div>
</section>
<section class="container">
<h1 class="h">Onde estamos</h1>
    <hr class="style18">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0524636660025!2d-46.65311668497802!3d-23.566559167669542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59b88451a681%3A0xe7a211eccd7317e8!2sAv.%20Paulista%2C%20807%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001311-100!5e0!3m2!1spt-BR!2sbr!4v1645925978819!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></section>

<!-- Whats app da Página -->
<a href="https://api.whatsapp.com/send?l=pt&amp;phone=55041999999"><img 
  src="https://i.imgur.com/ryESuZ5.png" style="height:64px; position:fixed; bottom: 25px; right: 
  25px; z-index:99999;" data-selector="img">
</a>
<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h" id="exampleModalLabel">Agendamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" style="display: block; margin: 0 auto;">
          <script src="https://boaconsulta-widgets.s3.sa-east-1.amazonaws.com/bc-widget-schedules.min.js"></script>
          <bc-widget-schedules profile-slug="61f2c58153c29d005f000031" layout="medium"></bc-widget-schedules>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bot_whats" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Psicoterapias -->
<div class="modal fade" id="psicoterapia" tabindex="-1" role="dialog" aria-labelledby="psicoterapia" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h" id="exampleModalLongTitle">Psicoterapias:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

      Psicoterapias: Como são os atendimentos e como os atendimentos podem me auxiliar?

A técnica utilizada é de Psicoterapia de orientação psicanalítica.  As sessões se tornam uma parada para escutar a si mesmo e refletir com maior profundidade as circunstâncias do cotidiano e da história de vida. Nesse sentido, poderá haver uma ampliação da compreensão sobre suas dúvidas, seus sentimentos, desejos, angústias e conflitos inconscientes. A análise dessas circunstâncias pode propiciar outras possibilidades de ação e tomadas de atitudes,  possível melhoria nas relações, e na saúde emocional.

A dificuldade de esclarecer todos esses aspectos, e a falta de autoconhecimento e apoio, pode contribuir para  adoecimentos psicólogicos, como por exemplo, a ansiedade e a depressão. 
 


Tipos de Psicoterapia e quando utilizá-las:

Orientação Psicológica: 1 a 4 sessões.  É uma orientação e acolhimento em algum momento de necessidade. Público indicado: Adultos, Adolescentes, Gestantes e Puérperas (mulheres no pós-parto).

Psicoterapia Breve: Em torno de 20 sessões. O objetivo é a intervenção em alguma questão-problema ou área específica e delimitada a ser desenvolvida. Como por exemplo: Problema profissional ou problema de relacionamento.  Público indicado: Adultos, Adolescentes, Gestantes e Puérperas (mulheres no pós-parto).

Psicoterapia: Sem prazo pré-determinado. O objetivo da psicoterapia é  possibilitar ser trabalhado, refletido e analisar - com maior profundidade - sobre diversos temas e aspectos a desenvolver.  Público indicado: Adultos, Adolescentes, Gestantes e Puérperas (mulheres no pós-parto)


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bot_whats" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!-- Prevenção -->
<div class="modal fade" id="prevencao" tabindex="-1" role="dialog" aria-labelledby="prevencao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h" id="exampleModalLongTitle">Prevenção:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

      Serviços de prevenção e quando utilizá-los: 


Autoconhecimento Breve:  Para aqueles que não querem entrar em processo de psicoterapia e almejam saber um pouco mais de si mesmo, essa é uma das possibilidades. 
O objetivo desse programa é propiciar a facilitação ao autoconhecimento de forma breve, pois são em torno de 4 encontros online.  Através das atividades 
propostas o participante poderá se conectar com suas habilidades e alguns aspectos de sua personalidade, bem como a avaliação da saúde emocional atual.
Pré-Natal Psicológico:    O objetivo desse programa é trabalhar o preparo emocional para a gestação e pós-parto da mulher gestante e da sua familia. 
Os temas dos 7 encontros são focados nos aspectos emocionais da gestação, pós-parto, maternidade e desenvolvimento emocional do bebê. 
São 7 workshops (encontros virtuais) de aproximadamente 1:30 hora de duração em cada encontro.
Apoio psicológico para mulheres no puerpério:  O puerpério é um momento de muitas adaptações, inseguranças e por vezes instabilidades emocionais. 
Contar com um apoio psicológico nesse momento pode ser muito importante para a mulher. O apoio pode ser semanal, quinzenal ou esporádico, de acordo com as possibilidades da mulher. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bot_whats" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!-- Profissional -->
<div class="modal fade" id="orientacao" tabindex="-1" role="dialog" aria-labelledby="orientacao" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h" id="exampleModalLongTitle">Orientação Profissional:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

      A orientação profissional e orientação de carreira possibilitam um autoconhecimento pessoal e profissional para te auxiliar melhor em suas escolhas profissionais. Durante o processo da orientação vamos alinhando juntos as suas características de sua personalidade, bem como suas habilidades e aptidões, seus desejos e experiências de vida.  

Para Quem é indicada a Orientação Profissional e de carreira?  

As pessoas que estão escolhendo sua primeira profissão (jovens a partir do ensino médio)
As pessoas que estão no início de suas carreiras (estudantes do ensino técnico, estudantes da graduação ou recém-formados) 
 As pessoas que já têm uma trajetória profissional e almejam mudar de atividade, ou mesmo acrescentar uma nova atividade dentro de um curto, médio, ou longo prazo. 
 Aqueles que saíram ou estão saindo do mercado de trabalho e/ou almejam se aposentar e realizar outras tarefas profissionais.   

Como é feita a orientação e o que é necessário? 

São em torno de 6 encontros online, com duração entre 1:00 e 1:30 hrs, de acordo com a singularidade e necessidade de cada pessoa. É preciso ter um computador, internet e estar em um local tranqüilo e privativo. Serão pedidas algumas atividades extras. O orientando precisa estar envolvido e responder com maior sinceridade possível todas as perguntas das atividades solicitadas. 

O que esperar do programa de orientação? Quais são as vantagens e Benefícios? 

Todo o processo de orientação é realizado por psicóloga atuante na clínica e com experiência em organizações, do qual vai te auxiliar melhor em seu autoconhecimento pessoal (as características da sua personalidade, suas habilidades, a sua saúde mental e investigação do histórico profissional/estudantil). Com essas avaliações a orientação servirá como uma bússola norteadora e uma escolha profissional mais consciente, ajudando possivelmente em um melhor desempenho profissional, bem como poderá construir metas e objetivos futuros. Ao final da orientação você vai receber todas as suas informações que foram levantadas durante os encontros em formato de material digital, assim você poderá recorrer ao material em qualquer fase de sua vida e principalmente que envolva escolha profissional e então você poderá refletir e decidir com maior amplitude diante de possíveis novas e futuras ocupações.



Preços e Convênios:  Todos os atendimentos são cobrados por preço particular. Para consultar o preço clique no botão do whats app e será muito bom te conhecer e passar valores dos serviços. Quem tem convênio pode optar pelo atendimento via reembolso, alguns convênios aceitam pagamento vai reembolso, consulte seu convênio. Para maiores informações entre em contato e fale comigo, clicando no botão whatsapp na página superior do site. 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bot_whats" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<section class="container">
<hr class="style18">
  <h6 class="footer">www.samantapsi.com.br<br/>
  &copy 2022
  </h6>
</section>

</body>
</html>