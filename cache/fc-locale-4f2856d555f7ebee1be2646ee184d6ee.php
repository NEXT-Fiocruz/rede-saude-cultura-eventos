<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin Usuários em XML',
  'plugins.importexport.users.description' => 'Importar e exportar usuários',
  'plugins.importexport.users.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [sched_conf_path] [optional flags]
	export [xmlFileName] [sched_conf_path]
	export [xmlFileName] [sched_conf_path] [role_path1] [role_path2] ...

Flags opcionais:
	continue_on_error: Caso especificado, não parar a importação, mesmo na ocorrência de erros

	send_notify: Caso especificado, enviar notificação via e-mail contendo login e senha a usuários importados

Examplos:
	Importar usuários para mySchedConf de  myImportFile.xml, continuando mesmo com erros:
	{$scriptName} {$pluginName} import myImportFile.xml mySchedConf continue_on_error

	Exportar todos os usuários de mySchedConf:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf

	Exportar todos os usuários cadastrados como avaliadores, junto com o papel de avalidor apenas:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf reviewer',
  'plugins.importexport.users.import.importUsers' => 'Importar Usuários',
  'plugins.importexport.users.import.instructions' => 'Escolha um arquivo XML contendo os dados de usuários a serem importados nesta conferência agendada. Veja a ajuda da conferência agendada sobre o formato e estrutura deste arquivo.<br /><br />Note que, caso o arquivo importado possua logins ou e-mails já existentes no sistema, os dados desses usuários não serão importados, e os novos papéis serão designados aos usuários existentes.',
  'plugins.importexport.users.import.failedToImportUser' => 'Falha ao importar usuário',
  'plugins.importexport.users.import.failedToImportRole' => 'Falha ao designar usuário ao papel',
  'plugins.importexport.users.import.dataFile' => 'Arquivo de dados do usuário',
  'plugins.importexport.users.import.sendNotify' => 'Enviar notificação via e-mail para cada usuário importado contendo login e senha de acesso.',
  'plugins.importexport.users.import.continueOnError' => 'Continuar a importação de usuários caso ocorra um erro.',
  'plugins.importexport.users.import.noFileError' => 'Nenhum arquivo enviado!',
  'plugins.importexport.users.import.usersWereImported' => 'Os seguintes usuários foram importados no sistema com sucesso',
  'plugins.importexport.users.import.errorsOccurred' => 'Ocorreram erros durante a importação',
  'plugins.importexport.users.import.confirmUsers' => 'Confirme se estes são os usuários que deseja importar',
  'plugins.importexport.users.import.warning' => 'Advertência',
  'plugins.importexport.users.import.encryptionMismatch' => 'Não é possível utilizar senhas criptografadas com {$importHash}; o sistema está configurado para utilizar {$ocsHash}. Caso continue, será necessário resetar as senhas dos usuários importados.',
  'plugins.importexport.users.unknownSchedConf' => 'Foi especificado um caminho desconhecido "{$schedConfPath}" para conferência agendada.',
  'plugins.importexport.users.export.exportUsers' => 'Exportar Usuários',
  'plugins.importexport.users.export.exportByRole' => 'Exportar Por Papel',
  'plugins.importexport.users.export.exportAllUsers' => 'Exportar Todos',
  'plugins.importexport.users.export.errorsOccurred' => 'Ocorreram erros durante a exportação',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Não foi possível escrever arquivo "{$fileName}".',
); ?>