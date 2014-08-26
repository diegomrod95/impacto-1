<form name="cadastro" id="cadastro" method="post" action="<?php \Impacto\Html\Utils::get_url("cadastro/registrar"); ?>" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Crie sua Conta</legend>

<fieldset class="form-section-group">
    <legend class="form-section-group-legend">Informações da conta</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">E-mail:</label>  
      <div class="col-md-6">
      <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">O e-mail será usado para ter acesso à área do aluno e comunicar-se diretamente com a Impacto.</span>  
      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="senha">Senha:</label>
      <div class="col-md-5">
        <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
        <span class="help-block hidden">A senha deve ter entre 6 e 30 caracteres Ex.: senha@123</span>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="senha_rep">Repita sua senha:</label>
      <div class="col-md-5">
        <input id="senha_rep" name="senha_rep" type="password" placeholder="" class="form-control input-md" required="">
        <span class="help-block hidden">A senha deve ser a mesma que a anterior.</span>
      </div>
    </div>
</fieldset>

<fieldset class="form-section-group">
    <legend class="form-section-group-legend">Informações pessoais</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nome">Nome Completo:</label>  
      <div class="col-md-8">
      <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cpf">CPF:</label>  
      <div class="col-md-4">
      <input id="cpf" name="cpf" type="text" placeholder="999.999.999-99" class="form-control input-md" required="">
      <span class="help-block hidden">O campo deve estar no formato: 999.999.999-99</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="rg">RG:</label>  
      <div class="col-md-4">
      <input id="rg" name="rg" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nascimento">Data de Nascimento:</label>  
      <div class="col-md-4">
      <input id="nascimento" name="nascimento" type="text" placeholder="dd/mm/aaaa" class="form-control input-md" required="">
      <span class="help-block hidden">O campo deve estar no formato: dia/mês/ano</span>  
      </div>
    </div>
    
    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="genero">Gênero:</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="genero-0">
          <input type="radio" name="genero" id="genero-0" value="m" checked="checked">
          Masculino
        </label> 
        <label class="radio-inline" for="genero-1">
          <input type="radio" name="genero" id="genero-1" value="f">
          Feminino
        </label>
      </div>
    </div>
</fieldset>

<fieldset class="form-section-group">
    <legend class="form-section-group-legend">Endereço para envio dos certificados</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cep">Cep:</label>  
      <div class="col-md-5">
      <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="numero">Número:</label>  
      <div class="col-md-2">
      <input id="numero" name="numero" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="complemento">Complemento:</label>  
      <div class="col-md-8">
      <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="logradouro">Logradouro:</label>  
      <div class="col-md-4">
      <input id="logradouro" name="logradouro" type="text" placeholder="ex.: av, rua..." class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="endereco">Endereço:</label>  
      <div class="col-md-8">
      <input id="endereco" name="endereco" type="text" placeholder="placeholder" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="bairro">Bairro:</label>  
      <div class="col-md-8">
      <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cidade">Cidade:</label>  
      <div class="col-md-8">
      <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="estado">Estado:</label>
      <div class="col-md-4">
        <select id="estado" name="estado" class="form-control">
          <option value="1">SP</option>
          <option value="2">RJ</option>
          <option value="3">TODO:...</option>
        </select>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pais">País:</label>  
      <div class="col-md-5">
      <input id="pais" name="pais" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">Este campo é obrigatório.</span>  
      </div>
    </div>
</fieldset>

<fieldset class="form-section-group">
    <legend class="form-section-group-legend">Informações de contato</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
      <div class="col-md-5">
      <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">O campo deve estar no formato: (11) 9999-9999</span>  
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="celular">Celular:</label>  
      <div class="col-md-5">
      <input id="celular" name="celular" type="text" placeholder="" class="form-control input-md" required="">
      <span class="help-block hidden">O campo deve estar no formato: (11) 90000-0000</span>  
      </div>
    </div>
    
    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="portador_deficiencia">Possui algum tipo de deficiência?</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="portador_deficiencia-0">
          <input type="radio" name="portador_deficiencia" id="portador_deficiencia-0" value="1" checked="checked">
          Sim
        </label> 
        <label class="radio-inline" for="portador_deficiencia-1">
          <input type="radio" name="portador_deficiencia" id="portador_deficiencia-1" value="0">
          Não
        </label>
      </div>
    </div>
    
</fieldset>

<input name="validation_token" type="hidden" value="<?php echo FORM_VALIDATION_TOKEN; ?>"/>

<div class="form-group" style="margin-top:10px;">
  <label class="col-md-9 control-label" for="btn_enviar"></label>
  <div class="col-md-3">
    <button type="submit" id="btn_enviar" name="btn_enviar" class="btn btn-success">Cadastrar</button>
    <button id="btn_limpar" name="btn_limpar" class="btn btn-danger">Limpar</button>
  </div>
</div>

</fieldset>
</form>


