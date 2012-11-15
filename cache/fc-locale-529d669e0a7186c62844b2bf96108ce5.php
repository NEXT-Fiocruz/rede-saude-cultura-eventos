<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin Submissões para XML',
  'plugins.importexport.native.description' => 'Importar e exportar submissões',
  'plugins.importexport.native.cliUsage' => 'Uso: {$scriptName} {$pluginName} [command] ...
Comandos:
	import [xmlFileName] [conference_path] [sched_conf_path] [user_name] ...
	export [xmlFileName] [conference_path] [sched_conf_path] papers [paperId1] [paperId2] ...
	export [xmlFileName] [conference_path] [sched_conf_path] paper [paperId]

Parâmetros adicionais são obrigatórios para importar dados conforme exemplo a seguir, dependendo do nodo raíz do documento XML.

Caso o nodo raíz seja <paper> ou <papers>, parâmetros adicionais são obrigatórios.
São aceitos os formatos a seguir:

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_id [trackId]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_name [trackName]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_abbrev [trackAbbrev]',
  'plugins.importexport.native.export' => 'Exportar Dados',
  'plugins.importexport.native.export.tracks' => 'Exportar Modalidades',
  'plugins.importexport.native.export.papers' => 'Exportar Submissões',
  'plugins.importexport.native.selectPaper' => 'Selecionar Submissão',
  'plugins.importexport.native.import.papers' => 'Importar Submissões',
  'plugins.importexport.native.import.papers.description' => 'O arquivo a ser importado contém uma ou mais submissões. É necessário definir a modalidade que receberá essas submissões; caso não deseje importar todas para a mesma modalidade, pode-se separá-las em arquivos XML distintos ou movê-las para as modalidades respectivas após a importação.',
  'plugins.importexport.native.import' => 'Importar Dados',
  'plugins.importexport.native.import.description' => 'Este plugin permite a importação de dados baseado na DTD (Document Type Definition) do native.dtd. Nodos raíz suportados são &lt;paper&gt; e &lt;papers&gt;.',
  'plugins.importexport.native.import.error' => 'Erro na Importação',
  'plugins.importexport.native.import.error.description' => 'Um ou mais erros ocorreram durante a importação. Certifique-se de que o formato do arquivo a ser importado está de acordo com a especificação. O detalhamento dos erros de importação estão listados a seguir.',
  'plugins.importexport.native.cliError' => 'ERRO:',
  'plugins.importexport.native.error.unknownUser' => 'O usuário especificado, "{$userName}", não existe.',
  'plugins.importexport.native.error.unknownConference' => 'A conferência especificada ou caminho da conferência agendada, "{$conferencePath}" ou "{$schedConfPath}" (respectivamente), não existe.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Não foi possível escrever no arquivo "{$fileName}".',
  'plugins.importexport.native.export.error.trackNotFound' => 'Nenhuma modalidade encontrada com o identificador "{$trackIdentifier}".',
  'plugins.importexport.native.export.error.paperNotFound' => 'Nenhuma submissão encontrada com o ID "{$paperId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Este plugin não suporta o nodo raíz "{$rootName}". Certifique-se de que o arquivo está de acordo com a especificação e tente novamente.',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Um valor booleano "{$value}" foi especificado. Utilize "true" ou "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'Uma data inválida "{$value}" foi especificada.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Dados embutidos utilizando um tipo de codificação "{$type}" desconhecido.',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Impossível salver cópia local de "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'A URL especificada "{$url}" é ilegal. Importações enviadas via Web suportam apenas métodos http, https, ftp, ou ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Tipo desconhecido "{$suppFileType}" de arquivo suplementar especificado.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'Não foi possível copiar a URL "{$url}" para o arquivo local.',
  'plugins.importexport.native.import.error.paperTitleLocaleUnsupported' => 'O título do documento ("{$paperTitle}") foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperAbstractLocaleUnsupported' => 'O resumo do documento "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'A submissão "{$paperTitle}" na modalidade "{$trackTitle}" não possui rótulo para composição final.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Faltando arquivo suplementar da submissão "{$paperTitle}" da modalidade "{$trackTitle}".',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Faltando arquivo de composição final da submissão "{$paperTitle}" da modalidade "{$trackTitle}".',
  'plugins.importexport.native.import.error.trackTitleLocaleUnsupported' => 'Título da modalidade ("{$trackTitle}") foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.trackAbbrevLocaleUnsupported' => 'A abreviação da modalidade ("{$trackAbbrev}") foi informada em idioma ("{$locale}") que a conferência não suporta.',
  'plugins.importexport.native.import.error.trackIdentifyTypeLocaleUnsupported' => 'O tipo de identificação ("{$trackIdentifyType}") da modalidade foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.trackPolicyLocaleUnsupported' => 'A política ("{$trackPolicy}") da modalidade foi informada em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.trackTitleMismatch' => 'O título da modalidade "{$track1Title}" e o título da modalidade "{$track2Title}" combinam com as modalidades distintas existentes.',
  'plugins.importexport.native.import.error.trackTitleMatch' => 'O título da modalidade "{$trackTitle}" é idêntico ao da modalidade existente na conferência, mas outro título da modalidade não combina com nenhum outro título da modalidade existente.',
  'plugins.importexport.native.import.error.trackAbbrevMismatch' => 'A abreviação "{$track1Abbrev}" da modalidade e a abreviação "{$track2Abbrev}" da modalidade são idênticas em modalidades diferentes existentes na conferência.',
  'plugins.importexport.native.import.error.trackAbbrevMatch' => 'A abreviação "{$trackAbbrev}" é idêntica à de uma modalidade existente, porém outra abreviação desta modalidade não foi encontrada na modalidade existente na conferência.',
  'plugins.importexport.native.import.error.paperDisciplineLocaleUnsupported' => 'A área do conhecimento da submissão "{$paperTitle}" foi informada em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperTypeLocaleUnsupported' => 'Um tipo de submissão foi informado para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSubjectLocaleUnsupported' => 'Um assunto foi informado para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência',
  'plugins.importexport.native.import.error.paperSubjectClassLocaleUnsupported' => 'Uma classificação de assunto foi informada para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperCoverageGeoLocaleUnsupported' => 'Uma cobertura geográfica foi informada para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperCoverageChronLocaleUnsupported' => 'Uma cobertura cronológica foi informada para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperCoverageSampleLocaleUnsupported' => 'Uma cobertura da amostragem foi informada para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSponsorLocaleUnsupported' => 'Um patrocinador foi informado para a submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperAuthorCompetingInterestsLocaleUnsupported' => 'Um conflito de interesses foi informado para o autor "{$authorFullName}" da submissão "{$paperTitle}" em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperAuthorBiographyLocaleUnsupported' => 'A biografia de "{$authorFullName}" da submissão "{$paperTitle}" foi informada em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'A composição final da submissão "{$paperTitle}" foi informada em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileTitleLocaleUnsupported' => 'O título do arquivo suplementar ("{$suppFileTitle}") da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileCreatorLocaleUnsupported' => 'O criador do arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileSubjectLocaleUnsupported' => 'O assunto do arquivo "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileTypeOtherLocaleUnsupported' => 'Um tipo customizado de arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileDescriptionLocaleUnsupported' => 'A descrição do arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFilePublisherLocaleUnsupported' => 'O publicador do arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileSponsorLocaleUnsupported' => 'O patrocinador do arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informado em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.error.paperSuppFileSourceLocaleUnsupported' => 'A fonte do arquivo suplementar "{$suppFileTitle}" da submissão "{$paperTitle}" foi informada em idioma ("{$locale}") não suportado por esta conferência.',
  'plugins.importexport.native.import.success' => 'Dados importados com sucesso',
  'plugins.importexport.native.import.success.description' => 'Dados importados com sucesso. Itens importados com sucesso listados a seguir.',
  'plugins.importexport.native.error.uploadFailed' => 'O envio de arquivos falhou; verifique se o envio de arquivos está habilitado no servidor e que o arquivo não é maior que o permitido nas configurações do PHP e do servidor.',
); ?>