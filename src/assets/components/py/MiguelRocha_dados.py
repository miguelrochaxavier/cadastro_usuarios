import mysql.connector 
import pandas as pd

#Conectando o BD igual conexao.php
bd = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='cadastro_miguelrocha'
)

#Permite utilizar os comandos do SQL
cursor = bd.cursor()

cursor.execute('SELECT id, nome, cpf, tel, email FROM usuarios')

# Recuperando todos os dados da consulta
dados = cursor.fetchall()

# Criando um DataFrame com os dados
df = pd.DataFrame(dados, columns=['id', 'nome', 'cpf', 'tel', 'email'])

# Salvando o DataFrame em um arquivo Excel
df.to_excel('usuarios.xlsx', index=False, engine='openpyxl')

print("Planilha Excel criada com sucesso!")

#Deixar um embaixo do outro
#formatted_output = "\n"'.join([str(item) for item in printbd])
#print(formatted_output)