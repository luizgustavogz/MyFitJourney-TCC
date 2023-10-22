create database myFitJourneyProducts;
use myFitJourneyProducts;

create table accessories (
id int primary key not null auto_increment,
url  varchar(255) not null,
name varchar(255) not null,
description varchar(255) not null,
price float not null
);

show tables;

insert into accessories(url, name, description, price) values ('https://photos.google.com/share/AF1QipNOOxuaQf0SoeYmLfEpbmGY9oV-hXJLY9nmgvxR5wdJKRapIK9rrhbUJ3wyl0XjMQ/photo/AF1QipNLCl9yigvCy2ckriizrwvsJLH9A01K5vMl2CBW?key=UGRqaVNVOFlOUE0tUUE3cGRJWGdwWVZpR24xdDBB', 'Apoio para Flexão Fitness', 'Essas alças são projetadas para alinhar os pulsos de forma adequada, reduzir a pressão nos punhos e fornecer uma aderência estável durante as flexões.', 49.99);
insert into accessories(url, name, description, price) values('https://photos.google.com/share/AF1QipPQILfOa83jWgjnHhPImyq6Cmm3rRwVlCgnSSiz4FRxxG69Lk9W3IMPt-nahVwuMQ/photo/AF1QipNlsr0E6acFoYFHp9P3F9Ad-_TsGsV_O7J8bHgD?key=Qi00RVFBSTFCLTNiTTNuYzdnZlpVWlhHWUhYbF9R','Munhequeira Preta Rope Store','A munhequeira preta da Rope Store é uma elegante e resistente peça de acessório, perfeita para proteção e estilo durante atividades esportivas e cotidianas.',39.90);
insert into accessories(url, name, description, price) values('https://lh3.googleusercontent.com/pw/ADCreHeNwZmvxhk4V7GLjv6cDgVk1fygIEp4TI2ECelXt0Myqx_vDrrNVOdEIjHQuJY1tA9QJi842YvLQlm9XquwRcIqFRJVheWY9SqXiSCFImUZBH8OeKeLwKjNdQS5vJBgf1q7fDSaAyxeH3O-lPFvx4O8=w400-h300-s-no','Palmex Hidrolight Ajustável','A munhequeira ajustável Palmex Hidrolight é uma avançada solução para proteção e suporte no pulso. Ideal para atletas e pessoas ativas, oferece estabilidade personalizável para um desempenho otimizado.',19.90);
insert into accessories(url, name, description, price) values('https://lh3.googleusercontent.com/pw/ADCreHeTzl361__8c75SYEvr2UxXcNTXgYpxvHs_oVintXx1-mQcYBcl8lpABWNqJVcshQB_Yj6QkSu3Y5gZt_dbIpNb0okphNeP__J0JlzuhGPPGBdAqnn-G5hMiML3aL3XmR9sFilS7naLIPzLuLBZcJS2=w400-h300-s-no?authuser=0','Caneleiras de peso Fokus 5kg','As caneleiras de peso Fokus de 5kg são um complemento essencial para treinamento de resistência, aumentando o desafio nos exercícios e melhorando a força e a tonificação muscular. Confortáveis e ajustáveis.',59.40);
insert into accessories(url, name, description, price) values('https://lh3.googleusercontent.com/pw/ADCreHe3uyKzi4BD19Xyq9GX1HYz_yayw53f9QpxhXdOm7Fx6M2hGap_zdDfpKbmVyHDGqfxfPvtZtKVax07a0X6zOKNP-esLxot043OicnwHl3sNhNpwAJcB2AfTzUqcnmeGlIwSu61zedkjL_2uss_Baga=w400-h300-s-no?authuser=0','Fortalecedor de Dedo de Mão','O Fortalecedor de Dedo de Mão é uma ferramenta eficaz para melhorar a força e destreza dos dedos, auxiliando na reabilitação e no aprimoramento do desempenho em atividades manuais. Compacto e durável.',19.95);
insert into accessories(url, name, description, price) values('https://lh3.googleusercontent.com/pw/ADCreHeU6EdF2dNzErgG1sxa9E2DffjVdkRoktXe4O8HjKcrXT_pz_61oylkvGsbhy_eIlqvtC9YNoJcXIMYQR9kUWtDvrxZOkZav82wUkAG5NBq9uxJuCKAhKtrTmLrTxVGcjmFSUE5tVb0SIGTWEom-i9i=w400-h300-s-no?authuser=0','Protetor Palmar Mini Palma, Hidrolight','Protetor Palmar Mini Palma da Hidrolight é um dispositivo versátil que fortalece a musculatura dos dedos e da mão. Compacto e eficiente para melhorar o desempenho.',33.9);
insert into accessories(url, name, description, price) values('https://lh3.googleusercontent.com/pw/ADCreHdpX18xo-KKnkzz-8DlUa8ySdnTTdQBBgFU7OVxcu7UXag2sf5030VEQ8_mo7H6PQYZxWveFj8nz45k3X0f2v24jrMnaLS-5UtyU1SlfillL5M_as04hoMZXCShd1SawjQaDEUi537ip3J6tfG1WbxN=w400-h300-s-no?authuser=0','Coqueteleira Growth Suplements','A Coqueteleira Growth Supplements é o acessório ideal para misturar suplementos em pó com facilidade. Com design prático, à prova de vazamentos e capacidade ideal para atletas e entusiastas da boa forma.',8.1);
insert into accessories(id, url, name, description, price) values(8,'https://lh3.googleusercontent.com/pw/ADCreHdYvk3p33fwuwABAx3Y_faaORrvsgHVW4vD-JmLyliKeDTugeavOCesoLGEkuuDLD0eGleqSvnsK-zwsuZyAxqOXIcXWTmzAo5z3lbk_O1Zfdy2HUKUcec48-FwE-UO-Uw9oMOGS3AWPdvKyaSdWux-=w400-h300-s-no?authuser=0','Rolo de liberação miofacial','O Rolo de Liberação Miofascial é uma ferramenta de massagem eficaz para aliviar a tensão muscular e promover a flexibilidade. Ideal para atletas e entusiastas do fitness. Portátil e durável.',128.9);
insert into accessories(id, url, name, description, price) values(9,'https://lh3.googleusercontent.com/pw/ADCreHe4SN5UyL3hGat93Ncr0eyLuWCkZu-mCV3UzE0Z28bNQYa-IgwlzdSLO1HB0vrhjMMiIOtwe-hTdALgKUxQzxBaOn8WgjpFqEdRwv4FQnbeG508Zf4G3ubHA6fSVcyf_GwVixDVN2RSpQkL6GMe8NyO=w400-h300-s-no?authuser=0','Hand grip','O Hand Grip é um dispositivo de exercício manual projetado para fortalecer a musculatura da mão e do antebraço. Portátil e fácil de usar, ideal para melhorar a força e destreza.',29.98);
DELETE FROM accessories WHERE url='Alfreds Futterkiste';

SET SQL_SAFE_UPDATES = 0;
update accessories set url = 'https://lh3.googleusercontent.com/pw/ADCreHePUDEGLxbP2Vq3lGU00-JHMMmg0dqdz3fk8Z_u6qdg_Aj_S3werINaOzo74OgRIKI9ialwqE6P_OZqhTzeow8y-6xe2_Fmih27YCeePo3mHEuF9NFdUMeQFo3zn3DNZv0hR6mt_zRnu9q7R5KZ5Zvn=w400-h300-s-no-gm?authuser=0' where url = 'https://photos.google.com/share/AF1QipPQILfOa83jWgjnHhPImyq6Cmm3rRwVlCgnSSiz4FRxxG69Lk9W3IMPt-nahVwuMQ/photo/AF1QipNlsr0E6acFoYFHp9P3F9Ad-_TsGsV_O7J8bHgD?key=Qi00RVFBSTFCLTNiTTNuYzdnZlpVWlhHWUhYbF9R';

select * from accessories

