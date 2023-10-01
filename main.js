let age = prompt('Antes de mais nada, responda a seguinte pergunta: \nQuantos anos você tem?');

if(age < 13) {
    alert('Você não tem idade para acessar o Playground do Japonês');
    window.location.replace('https://www.youtube.com/watch?v=dQw4w9WgXcQ')

} else {
    let person = prompt('Seja muito bem-vindo(a) ao Playground do Japonês!! \nAntes de mais nada, me diga: \nComo você se chama?');
    alert('Que nome bacana. Divirta-se, ' + person + '!')
};