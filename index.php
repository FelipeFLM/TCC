<?php
/*
// gerar escolas

for ($i = 0; $i <= 143; $i++) {
    echo 'if ($data['.$i.']== ""){ $data['.$i.'] = "100";} <br>';
}

for ($i = 0; $i <= 143; $i++) {
    echo '$data['. $i .'] . " ---- " . <br>';
}

$lista = array(ANO_CENSO,PK_COD_ENTIDADE,NO_ENTIDADE,COD_ORGAO_REGIONAL_INEP,DESC_SITUACAO_FUNCIONAMENTO,DESC_SITUACAO_CENSO,DT_ANO_LETIVO_INICIO,DT_ANO_LETIVO_TERMINO,FK_COD_ESTADO,FK_COD_MUNICIPIO,FK_COD_DISTRITO,ID_DEPENDENCIA_ADM,ID_LOCALIZACAO,DESC_CATEGORIA_ESCOLA_PRIVADA,ID_CONVENIADA_PP,ID_TIPO_CONVENIO_PODER_PUBLICO,ID_MANT_ESCOLA_PRIVADA_EMP,ID_MANT_ESCOLA_PRIVADA_ONG,ID_MANT_ESCOLA_PRIVADA_SIND,ID_MANT_ESCOLA_PRIVADA_SIST_S,ID_MANT_ESCOLA_PRIVADA_S_FINS,NUM_CNPJ_ESCOLA_PRIVADA,NUM_CNPJ_UNIDADE_EXECUTORA,ID_DOCUMENTO_REGULAMENTACAO,ID_LOCAL_FUNC_PREDIO_ESCOLAR,ID_LOCAL_FUNC_SALAS_EMPRESA,ID_LOCAL_FUNC_SOCIOEDUCATIVA,ID_LOCAL_FUNC_UNID_PRISIONAL,ID_LOCAL_FUNC_TEMPLO_IGREJA,ID_LOCAL_FUNC_CASA_PROFESSOR,ID_LOCAL_FUNC_GALPAO,ID_LOCAL_FUNC_OUTROS,ID_LOCAL_FUNC_SALAS_OUTRA_ESC,ID_ESCOLA_COMP_PREDIO,ID_AGUA_FILTRADA,ID_AGUA_REDE_PUBLICA,ID_AGUA_POCO_ARTESIANO,ID_AGUA_CACIMBA,ID_AGUA_FONTE_RIO,ID_AGUA_INEXISTENTE,ID_ENERGIA_REDE_PUBLICA,ID_ENERGIA_GERADOR,ID_ENERGIA_OUTROS,ID_ENERGIA_INEXISTENTE,ID_ESGOTO_REDE_PUBLICA,ID_ESGOTO_FOSSA,ID_ESGOTO_INEXISTENTE,ID_LIXO_COLETA_PERIODICA,ID_LIXO_QUEIMA,ID_LIXO_JOGA_OUTRA_AREA,ID_LIXO_RECICLA,ID_LIXO_ENTERRA,ID_LIXO_OUTROS,ID_SALA_DIRETORIA,ID_SALA_PROFESSOR,ID_LABORATORIO_INFORMATICA,ID_LABORATORIO_CIENCIAS,ID_SALA_ATENDIMENTO_ESPECIAL,ID_QUADRA_ESPORTES_COBERTA,ID_QUADRA_ESPORTES_DESCOBERTA,ID_COZINHA,ID_BIBLIOTECA,ID_SALA_LEITURA,ID_PARQUE_INFANTIL,ID_BERCARIO,ID_SANITARIO_FORA_PREDIO,ID_SANITARIO_DENTRO_PREDIO,ID_SANITARIO_EI,ID_SANITARIO_PNE,ID_DEPENDENCIAS_PNE,ID_SECRETARIA,ID_BANHEIRO_CHUVEIRO,ID_REFEITORIO,ID_DESPENSA,ID_ALMOXARIFADO,ID_AUDITORIO,ID_PATIO_COBERTO,ID_PATIO_DESCOBERTO,ID_ALOJAM_ALUNO,ID_ALOJAM_PROFESSOR,ID_AREA_VERDE,ID_LAVANDERIA,ID_DEPENDENCIAS_OUTRAS,NUM_SALAS_EXISTENTES,NUM_SALAS_UTILIZADAS,NUM_EQUIP_TV,NUM_EQUIP_VIDEOCASSETE,NUM_EQUIP_DVD,NUM_EQUIP_PARABOLICA,NUM_EQUIP_COPIADORA,NUM_EQUIP_RETRO,NUM_EQUIP_IMPRESSORA,NUM_EQUIP_SOM,NUM_EQUIP_MULTIMIDIA,NUM_EQUIP_FAX,NUM_EQUIP_FOTO,NUM_COMPUTADORES,NUM_COMP_ADMINISTRATIVOS,NUM_COMP_ALUNOS,ID_INTERNET,ID_BANDA_LARGA,NUM_FUNCIONARIOS,ID_ALIMENTACAO,ID_AEE,ID_MOD_ATIV_COMPLEMENTAR,ID_MOD_ENS_REGULAR,ID_REG_INFANTIL_CRECHE,ID_REG_INFANTIL_PREESCOLA,ID_REG_FUND_8_ANOS,ID_REG_FUND_9_ANOS,ID_REG_MEDIO_MEDIO,ID_REG_MEDIO_INTEGRADO,ID_REG_MEDIO_NORMAL,ID_REG_MEDIO_PROF,ID_MOD_ENS_ESP,ID_ESP_INFANTIL_CRECHE,ID_ESP_INFANTIL_PREESCOLA,ID_ESP_FUND_8_ANOS,ID_ESP_FUND_9_ANOS,ID_ESP_MEDIO_MEDIO,ID_ESP_MEDIO_INTEGRADO,ID_ESP_MEDIO_NORMAL,ID_ESP_MEDIO_PROFISSIONAL,ID_ESP_EJA_FUNDAMENTAL,ID_ESP_EJA_MEDIO,ID_MOD_EJA,ID_EJA_FUNDAMENTAL,ID_EJA_MEDIO,ID_EJA_PROJOVEM,ID_FUND_CICLOS,ID_LOCALIZACAO_DIFERENCIADA,ID_MATERIAL_ESP_NAO_UTILIZA,ID_MATERIAL_ESP_QUILOMBOLA,ID_MATERIAL_ESP_INDIGENA,ID_EDUCACAO_INDIGENA,ID_LINGUA_INDIGENA,FK_COD_LINGUA_INDIGENA,ID_LINGUA_PORTUGUESA,ID_ESPACO_TURMA_PBA,ID_ABRE_FINAL_SEMANA,ID_PROPOSTA_PEDAG_ALTERNANCIA);
//'ANO_CENSO','PK_COD_ENTIDADE','NO_ENTIDADE','COD_ORGAO_REGIONAL_INEP','DESC_SITUACAO_FUNCIONAMENTO','DESC_SITUACAO_CENSO','DT_ANO_LETIVO_INICIO','DT_ANO_LETIVO_TERMINO','FK_COD_ESTADO','FK_COD_MUNICIPIO','FK_COD_DISTRITO','ID_DEPENDENCIA_ADM','ID_LOCALIZACAO','DESC_CATEGORIA_ESCOLA_PRIVADA','ID_CONVENIADA_PP','ID_TIPO_CONVENIO_PODER_PUBLICO','ID_MANT_ESCOLA_PRIVADA_EMP','ID_MANT_ESCOLA_PRIVADA_ONG','ID_MANT_ESCOLA_PRIVADA_SIND','ID_MANT_ESCOLA_PRIVADA_SIST_S','ID_MANT_ESCOLA_PRIVADA_S_FINS','NUM_CNPJ_ESCOLA_PRIVADA','NUM_CNPJ_UNIDADE_EXECUTORA','ID_DOCUMENTO_REGULAMENTACAO','ID_LOCAL_FUNC_PREDIO_ESCOLAR','ID_LOCAL_FUNC_SALAS_EMPRESA','ID_LOCAL_FUNC_SOCIOEDUCATIVA','ID_LOCAL_FUNC_UNID_PRISIONAL','ID_LOCAL_FUNC_TEMPLO_IGREJA','ID_LOCAL_FUNC_CASA_PROFESSOR','ID_LOCAL_FUNC_GALPAO','ID_LOCAL_FUNC_OUTROS','ID_LOCAL_FUNC_SALAS_OUTRA_ESC','ID_ESCOLA_COMP_PREDIO','ID_AGUA_FILTRADA','ID_AGUA_REDE_PUBLICA','ID_AGUA_POCO_ARTESIANO','ID_AGUA_CACIMBA','ID_AGUA_FONTE_RIO','ID_AGUA_INEXISTENTE','ID_ENERGIA_REDE_PUBLICA','ID_ENERGIA_GERADOR','ID_ENERGIA_OUTROS','ID_ENERGIA_INEXISTENTE','ID_ESGOTO_REDE_PUBLICA','ID_ESGOTO_FOSSA','ID_ESGOTO_INEXISTENTE','ID_LIXO_COLETA_PERIODICA','ID_LIXO_QUEIMA','ID_LIXO_JOGA_OUTRA_AREA','ID_LIXO_RECICLA','ID_LIXO_ENTERRA','ID_LIXO_OUTROS','ID_SALA_DIRETORIA','ID_SALA_PROFESSOR','ID_LABORATORIO_INFORMATICA','ID_LABORATORIO_CIENCIAS','ID_SALA_ATENDIMENTO_ESPECIAL','ID_QUADRA_ESPORTES_COBERTA','ID_QUADRA_ESPORTES_DESCOBERTA','ID_COZINHA','ID_BIBLIOTECA','ID_SALA_LEITURA','ID_PARQUE_INFANTIL','ID_BERCARIO','ID_SANITARIO_FORA_PREDIO','ID_SANITARIO_DENTRO_PREDIO','ID_SANITARIO_EI','ID_SANITARIO_PNE','ID_DEPENDENCIAS_PNE','ID_SECRETARIA','ID_BANHEIRO_CHUVEIRO','ID_REFEITORIO','ID_DESPENSA','ID_ALMOXARIFADO','ID_AUDITORIO','ID_PATIO_COBERTO','ID_PATIO_DESCOBERTO','ID_ALOJAM_ALUNO','ID_ALOJAM_PROFESSOR','ID_AREA_VERDE','ID_LAVANDERIA','ID_DEPENDENCIAS_OUTRAS','NUM_SALAS_EXISTENTES','NUM_SALAS_UTILIZADAS','NUM_EQUIP_TV','NUM_EQUIP_VIDEOCASSETE','NUM_EQUIP_DVD','NUM_EQUIP_PARABOLICA','NUM_EQUIP_COPIADORA','NUM_EQUIP_RETRO','NUM_EQUIP_IMPRESSORA','NUM_EQUIP_SOM','NUM_EQUIP_MULTIMIDIA','NUM_EQUIP_FAX','NUM_EQUIP_FOTO','NUM_COMPUTADORES','NUM_COMP_ADMINISTRATIVOS','NUM_COMP_ALUNOS','ID_INTERNET','ID_BANDA_LARGA','NUM_FUNCIONARIOS','ID_ALIMENTACAO','ID_AEE','ID_MOD_ATIV_COMPLEMENTAR','ID_MOD_ENS_REGULAR','ID_REG_INFANTIL_CRECHE','ID_REG_INFANTIL_PREESCOLA','ID_REG_FUND_8_ANOS','ID_REG_FUND_9_ANOS','ID_REG_MEDIO_MEDIO','ID_REG_MEDIO_INTEGRADO','ID_REG_MEDIO_NORMAL','ID_REG_MEDIO_PROF','ID_MOD_ENS_ESP','ID_ESP_INFANTIL_CRECHE','ID_ESP_INFANTIL_PREESCOLA','ID_ESP_FUND_8_ANOS','ID_ESP_FUND_9_ANOS','ID_ESP_MEDIO_MEDIO','ID_ESP_MEDIO_INTEGRADO','ID_ESP_MEDIO_NORMAL','ID_ESP_MEDIO_PROFISSIONAL','ID_ESP_EJA_FUNDAMENTAL','ID_ESP_EJA_MEDIO','ID_MOD_EJA','ID_EJA_FUNDAMENTAL','ID_EJA_MEDIO','ID_EJA_PROJOVEM','ID_FUND_CICLOS','ID_LOCALIZACAO_DIFERENCIADA','ID_MATERIAL_ESP_NAO_UTILIZA','ID_MATERIAL_ESP_QUILOMBOLA','ID_MATERIAL_ESP_INDIGENA','ID_EDUCACAO_INDIGENA','ID_LINGUA_INDIGENA','FK_COD_LINGUA_INDIGENA','ID_LINGUA_PORTUGUESA','ID_ESPACO_TURMA_PBA','ID_ABRE_FINAL_SEMANA','ID_PROPOSTA_PEDAG_ALTERNANCIA',

for ($i = 0; $i <= 140; $i++) {
echo '"'. $lista[$i] . '":\'. $data[' . $i .'] . \',';}

*/

// Gerar turmas
/*
for ($i = 0; $i <= 78; $i++) {
    echo 'if ($data['.$i.']== ""){ $data['.$i.'] = "100";} <br>';
}

for ($i = 0; $i <= 78; $i++) {
    echo '$data['. $i .'] . " ---- " . <br>';
}

$lista = array(ANO_CENSO , PK_COD_TURMA , NO_TURMA , HR_INICIAL , HR_INICIAL_MINUTO , NU_DURACAO_TURMA , NUM_MATRICULAS , FK_COD_MOD_ENSINO , FK_COD_ETAPA_ENSINO , FK_COD_CURSO_PROF , FK_COD_TIPO_TURMA , ID_MAIS_EDUCACAO , ID_DIA_SEMANA_DOMINGO , ID_DIA_SEMANA_SEGUNDA , ID_DIA_SEMANA_TERCA , ID_DIA_SEMANA_QUARTA , ID_DIA_SEMANA_QUINTA , ID_DIA_SEMANA_SEXTA , ID_DIA_SEMANA_SABADO , FK_COD_TIPO_ATIVIDADE_1 , FK_COD_TIPO_ATIVIDADE_2 , FK_COD_TIPO_ATIVIDADE_3 , FK_COD_TIPO_ATIVIDADE_4 , FK_COD_TIPO_ATIVIDADE_5 , FK_COD_TIPO_ATIVIDADE_6 , ID_BRAILLE , ID_RECURSOS_BAIXA_VISAO , ID_PROCESSOS_MENTAIS , ID_ORIENTACAO_MOBILIDADE , ID_SINAIS , ID_COM_ALT_AUMENT , ID_ENRIQ_CURRICULAR , ID_SOROBAN , ID_INF_ACESSIVEL , ID_PORT_ESC , ID_AUT_ESCOLAR , ID_QUIMICA , ID_FISICA , ID_MATEMATICA , ID_BIOLOGIA , ID_CIENCIAS , ID_LINGUA_LITERAT_PORTUGUESA , ID_LINGUA_LITERAT_INGLES , ID_LINGUA_LITERAT_ESPANHOL , ID_LINGUA_LITERAT_FRANCES , ID_LINGUA_LITERAT_OUTRA , ID_LINGUA_LITERAT_INDIGENA , ID_ARTES , ID_EDUCACAO_FISICA , ID_HISTORIA , ID_GEOGRAFIA , ID_FILOSOFIA , ID_ENSINO_RELIGIOSO , ID_ESTUDOS_SOCIAIS , ID_SOCIOLOGIA , ID_INFORMATICA_COMPUTACAO , ID_PROFISSIONALIZANTE , ID_DISC_ATENDIMENTO_ESPECIAIS , ID_DISC_DIVERSIDADE_SOCIO_CULT , ID_LIBRAS , ID_DISCIPLINAS_PEDAG , ID_OUTRAS_DISCIPLINAS , PK_COD_ENTIDADE , FK_COD_ESTADO , FK_COD_MUNICIPIO , FK_COD_DISTRITO , ID_LOCALIZACAO , ID_DEPENDENCIA_ADM , DESC_CATEGORIA_ESCOLA_PRIVADA , ID_CONVENIADA_PP , ID_TIPO_CONVENIO_PODER_PUBLICO , ID_MANT_ESCOLA_PRIVADA_EMP , ID_MANT_ESCOLA_PRIVADA_ONG , ID_MANT_ESCOLA_PRIVADA_SIND , ID_MANT_ESCOLA_PRIVADA_SIST_S , ID_MANT_ESCOLA_PRIVADA_S_FINS , ID_DOCUMENTO_REGULAMENTACAO , ID_LOCALIZACAO_DIFERENCIADA , ID_EDUCACAO_INDIGENA);

for ($i = 0; $i <= 78; $i++) {
echo '"'. $lista[$i] . '":\'. $data[' . $i .'] . \',';}
*/

// Gerar Matricula
/*
for ($i = 0; $i <= 84; $i++) {
    echo 'if ($data['.$i.']== ""){ $data['.$i.'] = "100";} <br>';
}

for ($i = 0; $i <= 84; $i++) {
    echo '$data['. $i .'] . " ---- " . <br>';
}

$lista = array(ANO_CENSO , PK_COD_MATRICULA , FK_COD_ALUNO , NU_DIA , NU_MES , NU_ANO , NUM_IDADE_REFERENCIA , NUM_IDADE , NU_DUR_ESCOLARIZACAO , NU_DUR_ATIV_COMP_MESMA_REDE , NU_DUR_ATIV_COMP_OUTRAS_REDES , NUM_DUR_AEE_MESMA_REDE , NUM_DUR_AEE_OUTRAS_REDES , TP_SEXO , TP_COR_RACA , TP_NACIONALIDADE , FK_COD_PAIS_ORIGEM , FK_COD_ESTADO_NASC , FK_COD_MUNICIPIO_DNASC , FK_COD_ESTADO_END , FK_COD_MUNICIPIO_END , ID_ZONA_RESIDENCIAL , ID_TIPO_ATENDIMENTO , ID_N_T_E_P , ID_RESPONSAVEL_TRANSPORTE , ID_TRANSP_VANS_KOMBI , ID_TRANSP_MICRO_ONIBUS , ID_TRANSP_ONIBUS , ID_TRANSP_BICICLETA , ID_TRANSP_TR_ANIMAL , ID_TRANSP_OUTRO_VEICULO , ID_TRANSP_EMBAR_ATE5 , ID_TRANSP_EMBAR_5A15 , ID_TRANSP_EMBAR_15A35 , ID_TRANSP_EMBAR_35 , ID_TRANSP_TREM_METRO , ID_POSSUI_NEC_ESPECIAL , ID_TIPO_NEC_ESP_CEGUEIRA , ID_TIPO_NEC_ESP_BAIXA_VISAO , ID_TIPO_NEC_ESP_SURDEZ , ID_TIPO_NEC_ESP_DEF_AUDITIVA , ID_TIPO_NEC_ESP_SURDO_CEGUEIRA , ID_TIPO_NEC_ESP_DEF_FISICA , ID_TIPO_NEC_ESP_DEF_MENTAL , ID_TIPO_NEC_ESP_DEF_MULTIPLAS , ID_TIPO_NEC_ESP_AUTISMO , ID_TIPO_NEC_ESP_ASPERGER , ID_TIPO_NEC_ESP_RETT , ID_TIPO_NEC_ESP_TDI , ID_TIPO_NEC_ESP_SUPERDOTACAO , ID_TIPO_REC_ESP_LEDOR , ID_TIPO_REC_ESP_TRANSCRICAO , ID_TIPO_REC_ESP_INTERPRETE , ID_TIPO_REC_ESP_LIBRAS , ID_TIPO_REC_ESP_LABIAL , ID_TIPO_REC_ESP_BRAILLE , ID_TIPO_REC_ESP_AMPLIADA_16 , ID_TIPO_REC_ESP_AMPLIADA_20 , ID_TIPO_REC_ESP_AMPLIADA_24 , ID_TIPO_REC_ESP_NENHUM , ID_INGRESSO_FEDERAIS , FK_COD_MOD_ENSINO , FK_COD_ETAPA_ENSINO , ID_ETAPA_AGREGADA_MAT , PK_COD_TURMA , FK_COD_CURSO_PROF , COD_UNIFICADA , FK_COD_TIPO_TURMA , PK_COD_ENTIDADE , FK_COD_ESTADO_ESCOLA , COD_MUNICIPIO_ESCOLA , FK_CODIGO_DISTRITO , ID_LOCALIZACAO_ESC , ID_DEPENDENCIA_ADM_ESC , DESC_CATA_ESCOLA_PRIV , ID_CONVENIADA_PP_ESC , ID_TIPO_CONVENIO_PODER_PUBLICO , ID_MANT_ESCOLA_PRIVADA_EMP , ID_MANT_ESCOLA_PRIVADA_ONG , ID_MANT_ESCOLA_PRIVADA_SIND , ID_MANT_ESCOLA_PRIVADA_SIST_S , ID_MANT_ESCOLA_PRIVADA_S_FINS , ID_DOCUMENTO_REGULAMENTACAO , ID_LOCALIZACAO_DIFERENCIADA , ID_EDUCACAO_INDIGENA);

for ($i = 0; $i <= 84; $i++) {
echo '"'. $lista[$i] . '":\'. $data[' . $i .'] . \',';} ?>
*/

// Gerar Matricula
/*
for ($i = 0; $i <= 125; $i++) {
    echo 'if ($data['.$i.']== ""){ $data['.$i.'] = "100";} <br>';
}

for ($i = 0; $i <= 125; $i++) {
    echo '$data['. $i .'] . " ---- " . <br>';
}
*/
$lista = array(ANO_CENSO , FK_COD_DOCENTE , NU_DIA , NU_MES , NU_ANO , NUM_IDADE_REF_DOCENTE , NUM_IDADE , TP_SEXO , TP_COR_RACA , TP_NACIONALIDADE , FK_COD_PAIS_ORIGEM , FK_COD_ESTADO_DNASC , FK_COD_MUNICIPIO_DNASC , FK_COD_ESTADO_DEND , FK_COD_MUNICIPIO_DEND , ID_ZONA_RESIDENCIAL , ID_POSSUI_NEC_ESPECIAL , ID_CEGUEIRA , ID_BAIXA_VISAO , ID_SURDEZ , ID_DEF_AUDITIVA , ID_SURDOCEGUEIRA , ID_DEF_FISICA , ID_DEF_INTELECTUAL , ID_DEF_MULTIPLA , FK_COD_ESCOLARIDADE , ID_SITUACAO_CURSO_1 , FK_CLASSE_CURSO_1 , FK_COD_AREA_OCDE_1 , ID_LICENCIATURA_1 , ID_COM_PEDAGOGICA_1 , NU_ANO_INICIO_1 , NU_ANO_CONCLUSAO_1 , ID_TIPO_INSTITUICAO_1 , ID_NOME_INSTITUICAO_1 , FK_COD_IES_1 , ID_SITUACAO_CURSO_2 , FK_CLASSE_CURSO_2 , FK_COD_AREA_OCDE_2 , ID_LICENCIATURA_2 , ID_COM_PEDAGOGICA_2 , NU_ANO_INICIO_2 , NU_ANO_CONCLUSAO_2 , ID_TIPO_INSTITUICAO_2 , ID_NOME_INSTITUICAO_2 , FK_COD_IES_2 , ID_SITUACAO_CURSO_3 , FK_CLASSE_CURSO_3 , FK_COD_AREA_OCDE_3 , ID_LICENCIATURA_3 , ID_COM_PEDAGOGICA_3 , NU_ANO_INICIO_3 , NU_ANO_CONCLUSAO_3 , ID_TIPO_INSTITUICAO_3 , ID_NOME_INSTITUICAO_3 , FK_COD_IES_3 , ID_QUIMICA , ID_FISICA , ID_MATEMATICA , ID_BIOLOGIA , ID_CIENCIAS , ID_LINGUA_LITERAT_PORTUGUESA , ID_LINGUA_LITERAT_INGLES , ID_LINGUA_LITERAT_ESPANHOL , ID_LINGUA_LITERAT_FRANCES , ID_LINGUA_LITERAT_OUTRA , ID_LINGUA_LITERAT_INDIGENA , ID_ARTES , ID_EDUCACAO_FISICA , ID_HISTORIA , ID_GEOGRAFIA , ID_FILOSOFIA , ID_ENSINO_RELIGIOSO , ID_ESTUDOS_SOCIAIS , ID_SOCIOLOGIA , ID_INFORMATICA_COMPUTACAO , ID_PROFISSIONALIZANTE , ID_DISC_ATENDIMENTO_ESPECIAIS , ID_DISC_DIVERSIDADE_SOCIO_CULT , ID_LIBRAS , ID_DISCIPLINAS_PEDAG , ID_OUTRAS_DISCIPLINAS , ID_ESPECIALIZACAO , ID_MESTRADO , ID_DOUTORADO , ID_POS_GRADUACAO_NENHUM , ID_ESPECIFICO_CRECHE , ID_ESPECIFICO_PRE_ESCOLA , ID_ESPECIFICO_ANOS_INICIAIS , ID_ESPECIFICO_ANOS_FINAIS , ID_ESPECIFICO_ENS_MEDIO , ID_ESPECIFICO_EJA , ID_ESPECIFICO_NEC_ESP , ID_ESPECIFICO_ED_INDIGENA , ID_ESPECIFICO_CAMPO , ID_ESPECIFICO_AMBIENTAL , ID_ESPECIFICO_DIR_HUMANOS , ID_ESPECIFICO_DIV_SEXUAL , ID_ESPECIFICO_DIR_ADOLESC , ID_ESPECIFICO_AFRO , ID_ESPECIFICO_OUTROS , ID_ESPECIFICO_NENHUM , ID_TIPO_DOCENTE , ID_TIPO_CONTRATACAO , PK_COD_TURMA , FK_COD_TIPO_TURMA , FK_COD_MOD_ENSINO , FK_COD_ETAPA_ENSINO , FK_COD_CURSO_PROF , PK_COD_ENTIDADE , FK_COD_ESTADO , FK_COD_MUNICIPIO , FK_COD_DISTRITO , ID_LOCALIZACAO , ID_DEPENDENCIA_ADM , DESC_CATEGORIA_ESCOLA_PRIVADA , ID_CONVENIADA_PP , ID_TIPO_CONVENIO_PODER_PUBLICO , ID_MANT_ESCOLA_PRIVADA_EMP , ID_MANT_ESCOLA_PRIVADA_ONG , ID_MANT_ESCOLA_PRIVADA_SIND , ID_MANT_ESCOLA_PRIVADA_SIST_S , ID_MANT_ESCOLA_PRIVADA_S_FINS , ID_DOCUMENTO_REGULAMENTACAO , ID_LOCALIZACAO_DIFERENCIADA , ID_EDUCACAO_INDIGENA );

for ($i = 0; $i <= 125; $i++) {
echo '"'. $lista[$i] . '":\'. $data[' . $i .'] . \',';} ?>
