# Desafio PHP: FileSystem (Autoral)

### Descrição do desafio
Dado um arquivo .csv com as colunas['nome', 'idade', 'genero', 'status] utilize os métodos FileSystem para ler os dados do arquivo e a partir do campo idade verificar se a pessoa é maior ou menor de 18 anos, caso seja maior o campo status deverá receber o texto "Liberado", senão receberá "Não liberado", uma vez já preenchido o campo status uma mensagem deve ser exibida para o usuário informando que aquela pessoa já foi verificada. Ao término gere um arquivo csv novo com a atulização do campos status.

### Aprendizado
1. Leitura e Escrita de arquivo:
```
// read
$leitura = fopen("file.csv", "r");

// write
$escrita = fopen("file.csv", "w");
```
2. Tratamento de arquivo csv:
```
$file = fgetcsv($leitura, 0, ',','"', '\\');
```
Desta forma ao receber o arquivo csv as linhas serão convertidas em colunas automaticamente.

3. Alteração de arquivo:
```
fputcsv($newFile, 0, ',','"', '\\');
```
4. Reforço da lógica de programação:
- Loops: while e foreach
- Condicionais: if/elseif/else

5. Aplicabilidade de Casting:
```
// converte string para inteiro
(int) $line[1]
```
