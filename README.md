# Converter todas as linhas de senhas para hash
Script simples para atualizar uma coluna de senhas para hash.<br>
Em um projeto que estou trabalhando vi que as senhas estavam sem disponivéis igual o usuário colocava, adicionei uma função hash e crie um script simples para convertes as senhas já existentes, para não perder o banco de dados já existente.
No exemplo uso a criptografia crc32, mas é recomendando o uso de um algoritmo mais avançado do PHP como o password_hash.
