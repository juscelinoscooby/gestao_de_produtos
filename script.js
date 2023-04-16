var tabela = document.getElementById("produtos");
var linhas = tabela.getElementsByTagName("tr");
var ordem = 1;

for (var i = 1; i < linhas.length; i++) {
	var celulaCodigo = linhas[i].getElementsByTagName("td")[0];
	var celulaProduto = linhas[i].getElementsByTagName("td")[1];
	var celulaQuantidade = linhas[i].getElementsByTagName("td")[2];
	var codigo = celulaCodigo.textContent || celulaCodigo.innerText;
	var produto = celulaProduto.textContent || celulaProduto.innerText;
	var quantidade = celulaQuantidade.textContent || celulaQuantidade.innerText;
	console.log("Produto " + ordem + ": " + produto + " (Código: " + codigo + ", Quantidade: " + quantidade + ")");
	ordem++;
}
