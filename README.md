![BITE-BANK](https://github.com/jcamposmelo/Bite_bank/assets/101723959/e0719356-228b-4c7c-9c28-deb89f2af909)

# Bite Bank

Repositório referente ao trabalho de conclusão do paper da Uniasselvi. Trata-se de um sistema em php, com estilização em css3 e um json, que faz a leitura do saque pelo cliente com deficiência visual, informando as cédulas presentes nesse saque e o saldo final da conta corrente.

## 🔨 Funcionalidades do projeto

O projeto é um sistema que simula a operação de um caixa eletrônico, ao qual o cliente opera 100% de maneira visual e intuitiva.

Essa é uma das partes que mais gosto, pois nela são informados, conforme disponibilidade na gaveta do cash dispenser, as cédulas e a contagem das mesmas de acordo com o saque.

            </form>
                <div id="notas">
                    <h2 id="disponivel">NOTAS DISPONÍVEIS:</h2>
                    <div class="nota-flex">
                        <img class="nota" src="imagens/notas/200-reais.jpg" alt="200 reais">
                        <img class="nota" src="imagens/notas/100-reais.jpg" alt="100 reais">
                        <img class="nota" src="imagens/notas/50-reais.jpg" alt="50 reais">
                        <img class="nota" src="imagens/notas/20-reais.jpg" alt="20 reais">
                        <img class="nota" src="imagens/notas/10-reais.jpg" alt="10 reais">
                        <img class="nota" src="imagens/notas/5-reais.jpg" alt="5 reais">
                        <img class="nota" src="imagens/notas/2-reais.jpg" alt="2 reais">
                    </div>
                </div>
                <form action="resetSaldo.php" method="post" class="reset button">
                    <input type="submit" value="Reiniciar Sessão" />
                </form>

Aqui, meste bloco, foi desenvolvida a lógica para criar o olhinho que esconde o saldo, tornando o processo seguro para quem está utilizando:

              function toggleVisibility() {
                  var saldoParagraph = document.getElementById('saldo-paragraph');
                  var eyeIcon = document.getElementById('eye-icon');
              
                      if (saldoParagraph.style.filter === 'blur(5px)') {
                      saldoParagraph.style.filter = 'none';
                      eyeIcon.innerHTML = '👁️';
                  } else {
                      saldoParagraph.style.filter = 'blur(5px)';
                      eyeIcon.innerHTML = '👁️';
                  }

## ✔️ Técnicas e tecnologias utilizadas

As técnicas e tecnologias utilizadas foram:

- `PHP`: criação da estrutura e dos elementos da tela;
- `CSS`: estilização da aplicação;
- `JavaScript`: construção de elementos dinâmicos para geração do json que revela em áudio o processo do saque.

## 📁 Acesso ao projeto

Você pode acessá-lo de forma gratuita e aprimorar!

Após baixar o projeto, você pode abrir com o Visual Studio Code. Para isso, no menu superior, clique em:

- **File** > **Open Folder**
- O projeto está salvo em 2 pastas `src` e `img` basta selecionar. (Caso o projeto esteja compactado na extensão .zip, será necessário extraí-lo antes de procurá-lo)
- Por fim clique em OK!

Ao finalizar esses passos, você pode executar a aplicação com a extensão Live Server 🏆 
