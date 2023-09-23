<!-- Estilos Gerais-->
<link rel="stylesheet" href="barra_acesso/acess.css" />

<script src="barra_acesso/script2.js"></script>

<!-- Inclusão Libras -->

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

<!-- Fim Inclusão Libras -->

<!-- Barra de acessibilidade -->

<div class="container-fluid bar1 d-none d-md-block" style="height: 36px; background-color: #DEDEDE">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                          <img src="barra_acesso/bandeira2.png" alt="Governo do Amapá" />
                        </div>
                        
                        <div class="col-sm-7" style="text-align: center; color: #333333; margin-top: 5px;">
                          <p>
                          <span style="vertical-align: middle;"><a href="#" data-toggle="modal" data-target="#myAcc" accesskey="5" style="color:#333">Acessibilidade:</a></span>
                            <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="bottom" aria-label="Add Contrast" id="contrast" title="Alto Contraste" style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/contrast2.png"></button>
                            <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="bottom" aria-label="Increase Font" id="increaseFont" title="Aumentar Fonte" style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/increase2.png"></button>
                            <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="bottom" id="decreaseFont" title="Reduzir Fonte" style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/decrease2.png"></button>
                            <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-placement="bottom" id="libras" title="Este site disponibiliza recursos da linguagem LIBRAS, procure o ícone na lateral direita da página." style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/libras.png"></button>
                            <button type="button" class="btn btn-outline-light" data-toggle="tooltip" data-html="true" id="teclado" title="<b>ATALHOS</b> <br> [1] Para Conteúdo <br> [2] Para Menu <br> [3] Para Rodapé <br> [4] Para Busca <br> [5] Sobre Acessibilidade" style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/keyboard2.png"></button>
                            <span style="margin-left: 50px"><a id="sitemap" class="btn btn-outline-light" href="#" onclick="window.open(baseUrl = getBaseUrl())" target"_blank" data-toggle="tooltip" data-placement="bottom" title="Mapa do Site" style="height:26px;padding:4px;line-height:.5;"><img src="barra_acesso/sitemap2.png"></a></span> 
                             <span style="vertical-align: middle;">Mapa do Site</span>
                          </p> 
                            
                            <div style="display: none;">
                              Conteúdo [<a href="#xpto" accesskey="1"> 1 </a>]  Menu [<a href="#inst" accesskey="2"> 2 </a>]  Rodapé [<a href="#links-rodape" accesskey="3"> 3 </a>]  Busca [<a href="#busca" accesskey="4"> 4 </a>]  Acessibilidade [<a href="#" data-toggle="modal" data-target="#myAcc" accesskey="5"> 5 </a>]  Fonte: <button class="btn-sm-1" aria-label="Increase Font" id="increaseFont" title="Aumentar Fonte">A+</button>  <button class="btn-sm-1" aria-label="Decrease Font" id="decreaseFont" title="Reduzir Fonte">A-</button>  Contraste: <button class="btn-sm-1" aria-label="Add Contrast" id="contrast"><i style="font-size: 0.55rem;" class="fas fa-adjust"></i></button>
                              <span class="float-right"><a href="#" onclick="window.open(baseUrl = getBaseUrl())" target"_blank"><i class="fas fa-sitemap"></i> Mapa do Site</a></span>
                            </div>
                        </div>
                        
                        <div class="col-sm-3 pull-right">
                          <form>
                            <div class="form-row">
                              
                              <div class="col-sm-12">
                                <select class="form-control" id="exampleFormControlSelect1" style="height: 26px; font-size: 0.8rem; font-weight: bold; margin-top: 5px; color: #127858; padding: .1rem .75rem; text-align: right;">
                                  <option>Órgãos do Governo</option>
                                  <option>Secretaria 1</option>
                                  <option>Secretaria 3</option>
                                  <option>Secretaria 4</option>
                                  <option>Secretaria 5</option>
                                </select>
                              </div>
                            </div>
                          </form>
                         
                        </div>
                    </div>
                </div>
</div>

<!-- Barra de acessibilidade -->

<!-- Modal de acessibilidade -->

<div class="modal fade" id="myAcc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="font-family: Rawline;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sobre Acessibilidade</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                    <p>Pessoas com deficiência visual, baixa visão, daltonismo e mobilidade reduzida podem navegar em nosso site por meio de recursos que foram implementados para garantir este acesso, tais como aumento de fonte, teclas de atalho e navegação por teclado.
                Para aumentar a fonte, é só clicar no símbolo de A+ em nossa barra de acessibilidade. Caso queira voltar ao tamanho de fonte original, é só clicar em A-.
  
                Se for necessário, você também pode usar o zoom nativo do seu navegador, pressionando as teclas “Ctrl” e “+” para aumentar todo o site e “Ctrl” e “-“ para diminuir. Para voltar ao padrão, pressione “Ctrl” e “0”.
                
                Este site tem melhor acessibilidade quando acessado nas versões mais atualizadas do seu navegador web. Utilize sempre a versão mais recente de seu software.</p>
                <p><b>Teclas de atalho por navegadores</b></p>
                
                <p><b>Internet Explorer e Google Chrome:</b></p>
                  <ul>
                    <li>“Alt” + “1” - ir para o conteúdo</li>
                    <li>“Alt” + “2” - ir para o menu</li>
                    <li>“Alt” + “3” - ir para o rodapé</li>
                    <li>“Alt” + “4” - ir para a busca</li>
                    <li>“Alt” + “5” - ir para a sobre a acessibilidade</li>
                    <li>“Alt” + “6” - ir para a localização</li>
                    </ul>
                
                <p><b>Firefox:</b></p>
                  <ul>
                    <li>“Alt” + “Shift” + “número”</b></li>
                    </ul>
                
                <p><b>Opera:</b></p>
                  <ul>
                    <li>“Shift” + “Escape” + “número”</b></li>
                    </ul>
                
                <p><b>Safari e OmniWeb:</b></p>
                  <ul>
                    <li>“Ctrl” + “número”</li>
                  </ul>
                
                <p><b>Navegação por tabulação</b></p>
                
                <p>Use a tecla Tab para navegar por elementos que recebem ação do usuário no site, tais como links, botões, campos de formulário e outros na ordem em que eles são apresentados na página, e Shift + Tab para retornar. Use as setas direcionais para acessar as informações textuais.
                Sugestões de programas disponíveis para pessoas com deficiência</p>
                
                <ul>
                    <li> VLibras: suíte de ferramentas utilizadas na tradução automática do Português para a Língua Brasileira de Sinais. Gratuito;</li>
                    <li> Nitrous Voice Flux: controla o computador por voz. Gratuito;</li>
                    <li> NVDA: software livre para ler tela – vários idiomas (Windows);</li>
                    <li> YeoSoft Text: leitor de tela em inglês e português;</li>
                    <li> Jaws for Windows: leitor de tela – vários idiomas;</li>
                    <li> Virtual Vision: leitor de telas em português do Brasil;</li>
                    <li> DOSVOX: sistema para deficientes visuais (Windows ou Linux).</li>
                </ul>
                
                <p>Observação: leia no manual do leitor de telas sobre a melhor forma de navegação em páginas web.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Fim Modal de acessibilidade -->