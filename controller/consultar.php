<head><link href="consultar.css" rel="stylesheet"></head>
<body>
    <div class= "box">
        <form id='ifform' metod=get action='resultadoDaConsulta.php'>
            <fieldset> 
            <legend><b>Consultar Cursos</b></legend>
            <br/> <br/>
                <div class="inputBox">
                    <input name='curso' class="input" id="curso" requirid>
                    <label for="curso" class="labelinput">Nome do Curso </label>
                </div>
                <br/><br/>
                <div class="inputBox">
                     <input name='Professor' class="input" id="Professor">  
                     <label for="Professor" class="labelinput">Professor</label>
                </div>
                <br/><br/>
              <div class="inputBox">
                    <input name='IdCurso' class="input" id="IdCurso" requirid>
                    <label for="IdCurso" class="labelinput">ID do Curso </label>
                </div>
               <br/><br/>
                <div class="inputBox">
                     <input name='Conteudo' class="input" id="Conteudo">  
                     <label for="Conteudo" class="labelinput">Conteudo</label>
                </div>
                <br/><br/>
               <div class="inputBox">
                    <input name='Telefone' class="input" id="Telefone" requirid>
                    <label for="Telefone" class="labelinput">Telefone</label>
                </div>
               <br/><br/>
                <div class="inputBox">
                     <input name='eMail' class="input" id="eMail">  
                     <label for="eMail" class="eMail">eMail</label>
                </div>
               <br/><br/>
              
               
 
            <input type=button value='Consultar' onclick='document.getElementById("ifform").submit();' />
            </fieldset>
        </form>
    <div/>