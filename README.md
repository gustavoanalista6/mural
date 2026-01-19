//TODO coisas que cadastra pelo super admin:
filiais


//TODO coisas que cadastra por ti de cada filial:
calendario escolar
credenciamento
cursos
detalhe_curso
dirigentes
filiais
informacao
mapa_salas
paginas
servicos
usuarios


//TODO - Melhor estilização de mural e admin

//TODO - MUDAR NAVEGAÇÃO NAS PÁGINAS DO PAINEL ADMINISTRATIVO

//TESTE 



#Criar docker 
docker-compose up -d --build

#Instale as dependências (se necessário):
docker exec -it laravel_app composer install


#Documentação para subir em produção
## 1-Subir arquivos, incluindo /vendor /node_modules. Fora de .zip

## Colocar todos os arquivos de /public na raiz do projeto

## Criar arquivo de configuração do servidor web.config

## Alterar rota em /routes/web.php. Retirar "/mural"

## Executar arquivo config.php que fica dentro da pasta /public. Para limpar todos os cache da aplicação

## Em seguida executar arquivo up.php. Para executar o comando "php artisan up" e assim subir a aplicação

## Inicialmente a aplicação fica lenta mas com o tempo é criado o cache pelo laravel e locaweb