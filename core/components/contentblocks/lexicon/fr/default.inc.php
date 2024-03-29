<?php
$_lang['contentblocks'] = "Content Blocks";
$_lang['contentblocks.menu'] = "Content Blocks";
$_lang['contentblocks.menu_desc'] = "Gestion des champs et des agencements de Content Blocks.";
$_lang['contentblocks.mgr.home'] = "Content blocks";

$_lang['contentblocks.general'] = "Général";
$_lang['contentblocks.properties'] = "Propriétés";

$_lang['contentblocks.link'] = "Lien";
$_lang['contentblocks.link.description'] = "Un champ pour créer des liens. Ressource, email et URL sont pris en charge.";
$_lang['contentblocks.link_template.description'] = "Un modèle pour le lien. Les placeholders disponibles sont : <code>[[+link]]</code>, <code>[[+link_raw]]</code>, <code>[[+linkType]]</code>";
$_lang['contentblocks.link.resource'] = "Ressource";
$_lang['contentblocks.link.url'] = "URL";
$_lang['contentblocks.link.email'] = "Adresse email";
$_lang['contentblocks.link.link_new_tab'] = "Ouvrir dans un nouvel onglet";
$_lang['contentblocks.link.add'] = "Ajouter un lien";
$_lang['contentblocks.link.remove'] = "Supprimer le lien";
$_lang['contentblocks.link.placeholder'] = "Start typing the name of a resource, external link or email address";
$_lang['contentblocks.link.link_detection_pattern_override'] = '"Surcharge" de pattern de détection de lien';
$_lang['contentblocks.link.link_detection_pattern_override.description'] = 'Regex pour détecter si un lien est valide ; Si ce n\'est pas le cas, http:// va être ajouté au début.';

$_lang['setting_contentblocks.link.link_detection_pattern'] = 'Pattern de détection de lien';
$_lang['setting_contentblocks.link.link_detection_pattern_desc'] = 'Regex pour détecter si un lien est valide ; Si ce n\'est pas le cas, http:// va être ajouté au début.';

$_lang['setting_contentblocks.typeahead.include_introtext'] = 'Inclure Introtext dans la complétion';
$_lang['setting_contentblocks.typeahead.include_introtext_desc'] = 'Activez cette option pour la complétion intègre également les champs "introtext" de chaque ressource, vous donnant plus d\'informations concernant les ressources.';

$_lang['contentblocks.error.not_an_export'] = "Le fichier ne semble pas être un export de Content Blocks";
$_lang['contentblocks.error.importing_row'] = "Erreur d'importation de la ligne:";
$_lang['contentblocks.error.no_valid_field'] = "Aucun champ valide trouvé";
$_lang['contentblocks.error.no_snippets'] = "Aucun snippet disponible";
$_lang['contentblocks.error.missing_id'] = "Propriété de l'ID manquante";
$_lang['contentblocks.error.input_not_found'] = "Entrée introuvable";
$_lang['contentblocks.error.input_not_found.message'] = "Oh oh. Un champ avec le type d'entrée « [[+input]] » a été chargé, cependant ce type d'entrée n'existe pas.";
$_lang['contentblocks.error.field_not_found'] = "Champ non trouvé";
$_lang['contentblocks.error.layout_not_found'] = "Agencement non trouvé";
$_lang['contentblocks.error.error_saving_object'] = "Erreur lors de l'enregistrement de l'objet";
$_lang['contentblocks.error.xml_not_loaded'] = "Impossible de charger le fichier XML";
$_lang['contentblocks.error.no_icons'] = "Impossible d'ouvrir le répertoire d'icônes";
$_lang['contentblocks.error.no_json'] = "Votre navigateur ne supporte pas JSON qui est requis pour Content Blocks. Merci de mettre à jour votre navigateur.";

$_lang['contentblocks.availability'] = "Disponibilité";
$_lang['contentblocks.availability.layout_description'] = "Par défaut, les agencements sont toujours disponibles. Si vous ajoutez des conditions , ils ne seront disponibles que lorsqu'une des conditions est réalisée. Séparez les multiples valeurs valides par une virgule.";
$_lang['contentblocks.availability.field_description'] = "Par défaut, les champs sont toujours disponibles. Si vous ajoutez des conditions, ils ne seront disponibles que lorsqu'une des conditions est réalisée. Séparez les multiples valeurs valides par une virgule.";
$_lang['contentblocks.availability.template_description'] = "Par défaut, les templates sont toujours disponibles. Si vous ajoutez des conditions, ils ne seront disponibles que lorsqu'une des conditions est valide. Séparez les conditions par des virgules.";
$_lang['contentblocks.add_condition'] = "Ajouter une condition";
$_lang['contentblocks.edit_condition'] = "Editer la condition";
$_lang['contentblocks.delete_condition'] = "Supprimer la condition";
$_lang['contentblocks.delete_condition.confirm'] = "Êtes-vous sûr de vouloir supprimer cette condition?";
$_lang['contentblocks.condition_field'] = "Champs";
$_lang['contentblocks.condition_field.resource'] = "ID de la Ressource";
$_lang['contentblocks.condition_field.parent'] = "ID du Parent";
$_lang['contentblocks.condition_field.ultimateparent'] = "ID du Parent Ultime (Ultimate Parent)";
$_lang['contentblocks.condition_field.class_key'] = "Clé de la Classe";
$_lang['contentblocks.condition_field.context'] = "Contexte";
$_lang['contentblocks.condition_field.template'] = "Modèle de page (ID)";
$_lang['contentblocks.condition_field.usergroup'] = "Groupe d'utilisateur (nom)";
$_lang['contentblocks.condition_value'] = "Valeur(s)";
$_lang['contentblocks.availibility.layouts'] = "Agencement(s)";
$_lang['contentblocks.availibility.layouts.description'] = "Restreindre l'utilisation de ce champ à un ou plusieurs agencements (séparés par une virgule). Si ceci reste vide, le champ est disponibles pour tous les agencements, sinon il est restreint à ceux que vous avez indiqués.";
$_lang['contentblocks.availibility.times_per_page'] = "Nombre de fois par page";
$_lang['contentblocks.availibility.times_per_page.description'] = "Restreindre l'utilisation de ceci plusieurs fois sur la page. Laisser vide pour n'avoir aucune restriction.";
$_lang['contentblocks.availibility.times_per_layout'] = "Nombre de fois par agencement";
$_lang['contentblocks.availibility.times_per_layout.description'] = "Restreindre l'utilisation de ceci plusieurs fois dans un agencement. Laisser vide pour n'avoir aucune restriction.";
$_lang['contentblocks.availibility.only_nested'] = "N'autoriser qu'en agencement imbriqué";
$_lang['contentblocks.availibility.only_nested.description'] = "Ne pas autoriser l'agencement à être utilisé en dehors d'un champ  agencement.";


$_lang['contentblocks.field_desc'] = "Les champs sont l'épine dorsale de ContentBlocks - ils définissent exactement la <em> liberté de création </ em> que les éditeurs ont dans la gestion de leurs contenus. Chaque Champ est constitué principalement d'un type d'entrée et d'un modèle qui dicte comment il est rendu sur le front-end. Pour plus d'informations sur l'utilisation de Champs correctement, appuyez sur le bouton Aide en haut à droite de l'écran.";
$_lang['contentblocks.add_field'] = "Ajouter un Champs";
$_lang['contentblocks.edit_field'] = "Editer le Champs";
$_lang['contentblocks.duplicate_field'] = "Dupliquer le Champs";
$_lang['contentblocks.delete_field'] = "Supprimer le Champs";
$_lang['contentblocks.delete_field.confirm'] = "Êtes-vous sûr de vouloir supprimer ce Champs? Des événements potentiellement désastreux peuvent arriver à du contenu utilisant ce Champs.";
$_lang['contentblocks.delete_field.confirm.js'] = "Êtes-vous sûr de vouloir supprimer ce Champs?";
$_lang['contentblocks.export_fields'] = "Exporter";
$_lang['contentblocks.export_fields.confirm'] = "En cliquant Oui ci-dessous, nous préparerons un export XML de tous les Champs. Ceci peut-être utilisé pour importer les Champs plus tard ou dans une autre installation. La génération du fichier XML peut prendre quelques secondes, selon le nombre de Champs que vous avez configurés.";
$_lang['contentblocks.import_fields'] = "Importer";
$_lang['contentblocks.import_fields.title'] = "Importer les Champs.";
$_lang['contentblocks.import_fields.intro'] = "En uploadant un fichier XML et en choisissant le mode d'importation approprié, vous pouvez importer les Champs que vous avez soit exportés auparavant soit exportés d'un autre site. <b>Attention</b> à l'importation de Champs si vous avez du contenu utilisant déjà lesdits Champs. Merci de contacter support@modmore.com si vous n'êtes pas sûr du mode d'importation à utiliser.";

$_lang['contentblocks.layout_desc'] = "Chaque agencement est essentiellement une rangée horizontale constituée d'une ou plusieurs colonne(s). Lors de l'édition d'une Ressource, chaque colonne contient un bouton pour ajouter du contenu (en utilisant les Champs). Pour plus d'informations sur l'utilisation correcte des agencement, cliquez sur le bouton Aide en haut à droite de l'écran.";
$_lang['contentblocks.add_layout'] = "Ajouter un agencement";
$_lang['contentblocks.repeat_layout'] = "Répéter l'agencement";
$_lang['contentblocks.edit_layout'] = "Editer l'agencement";
$_lang['contentblocks.duplicate_layout'] = "Dupliquer l'agencement";
$_lang['contentblocks.delete_layout'] = "Supprimer l'agencement";
$_lang['contentblocks.delete_layout.confirm'] = "Êtes-vous sûr de vouloir supprimer cet agencement? Des événements potentiellement désastreux peuvent arriver à du contenu utilisant cet agencement.";
$_lang['contentblocks.delete_layout.confirm.js'] = "Êtes-vous sûr de vouloir supprimer cet agencement [[+layoutName]] ? Tous ses contenus seront supprimés avec si vous confirmez.";
$_lang['contentblocks.export_layouts'] = "Exporter";
$_lang['contentblocks.export_layouts.confirm'] = "En cliquant Oui ci-dessous, nous préparerons un export XML de tous les agencements. Ceci peut-être utilisé pour importer les agencements plus tard ou dans une autre installation. La génération du fichier XML peut prendre quelques secondes, selon le nombre d'agencements que vous avez configurés.";
$_lang['contentblocks.import_layouts'] = "Importer";
$_lang['contentblocks.import_layouts.title'] = "Importer les agencements";
$_lang['contentblocks.import_layouts.intro'] = "En uploadant un fichier XML et en choisissant le mode d'importation approprié, vous pouvez importer les agencements que vous avez soit exportés auparavant soit exportés d'un autre site. <b>Attention</b> à l'importation d'agencements si vous avez du contenu utilisant déjà lesdits agencements. Merci de contacter support@modmore.com si vous n'êtes pas sûr du mode d'importation à utiliser.";

$_lang['contentblocks.layout_settings'] = "Paramètres de l'agencement";
$_lang['contentblocks.layout_settings.modal_header'] = "Paramètres de [[+name]] ";

$_lang['contentblocks.field_settings'] = "Paramètres du contenu";
$_lang['contentblocks.field_settings.modal_header'] = "Paramètres de [[+name]]";

$_lang['contentblocks.add_layoutcolumn'] = "Ajouter une colonne";
$_lang['contentblocks.edit_layoutcolumn'] = "Editer la colonne";
$_lang['contentblocks.delete_layoutcolumn'] = "Supprimer la colonne";
$_lang['contentblocks.delete_layoutcolumn.confirm'] = "Êtes-vous sûr de vouloir supprimer cette colonne? Des événements potentiellement désastreux peuvent arriver à du contenu utilisant cette colonne.";
$_lang['contentblocks.add_setting'] = "Ajouter un paramètre";
$_lang['contentblocks.edit_setting'] = "Editer le paramètre";
$_lang['contentblocks.delete_setting'] = "Supprimer le paramètre";
$_lang['contentblocks.delete_setting.confirm'] = "Êtes-vous sûr de vouloir supprimer le paramètre ?";

$_lang['contentblocks.defaults'] = 'Valeurs par défaut';
$_lang['contentblocks.defaults.intro'] = 'Avec les valeurs par défaut, vous pouvez configurer comment sont gérées les ressources qui n\'ont pas encore été éditées avec ContentBlocks (par exemple les nouvelles ressources, ou les pages qui existaient avant l\'installation de ContentBlocks). Cela fonctionne en analysant les règles définies ci-dessous, de haut en bas, jusqu\'à ce qu\'une correspondance soit trouvée et utilisée.';
$_lang['contentblocks.constraint_field'] = 'Champ de contrainte';
$_lang['contentblocks.constraint_value'] = 'Valeur de contrainte';
$_lang['contentblocks.default_template'] = 'Modèle par défaut';
$_lang['contentblocks.target_layout'] = 'Layout cible';
$_lang['contentblocks.target_field'] = 'Champ cible';
$_lang['contentblocks.target_column'] = 'Colonne cible';
$_lang['contentblocks.add_default'] = 'Ajouter une règle par défaut';
$_lang['contentblocks.edit_default'] = 'Modifier la règle par défaut';
$_lang['contentblocks.delete_default'] = 'Supprimer la règle par défaut';
$_lang['contentblocks.delete_default.confirm'] = 'Êtes-vous sûr de que vouloir supprimer cette règle par défaut ?';


$_lang['contentblocks.start_import'] = "Démarrer l'importation";
$_lang['contentblocks.import_file'] = "Fichier";
$_lang['contentblocks.import_mode'] = "Mode d'importation";
$_lang['contentblocks.import_mode.insert'] = "Insertion : laisser les [[+what]] existants et ajouter les données importées.";
$_lang['contentblocks.import_mode.overwrite'] = "Ecrasement: laisser les  [[+what]] existants, mais les écraser s'ils ont le même ID.";
$_lang['contentblocks.import_mode.replace'] = "Remplacement : d'abord supprimer tous les [[+what]] actuels et ensuite importer les nouvelles lignes.";

$_lang['contentblocks.id'] = "ID";
$_lang['contentblocks.field'] = "Champ";
$_lang['contentblocks.fields'] = "Champs";
$_lang['contentblocks.layout'] = "Bloc";
$_lang['contentblocks.layout.description'] = "Un conteneur de champs";
$_lang['contentblocks.layouts'] = "Agencements";
$_lang['contentblocks.layoutcolumn'] = "Colonne";
$_lang['contentblocks.layoutcolumns'] = "Colonnes";
$_lang['contentblocks.setting'] = "Paramètre";
$_lang['contentblocks.settings'] = "Paramètres";
$_lang['contentblocks.settings.layout_description'] = "Les paramètres sont des propriétés définies par l'utilisateur qui peuvent être modifiés quand un agencement a été ajouté au contenu. Les valeurs de paramètres sont alors disponibles dans le modèle comme des placeholders, par exemple [[+class]] pour un paramètre référencé \"class\".";
$_lang['contentblocks.settings.field_description'] = "Les paramètres sont des propriétés définies par l'utilisateur qui peuvent être modifiés quand un champ a été ajouté au contenu en cliquant sur l'icône engrenage tout en haut à droite du Champ. Les valeurs de paramètres sont alors disponibles dans le modèle comme des placeholders, par exemple [[+class]] pour un paramètre référencé \"class\".";
$_lang['contentblocks.input'] = "Type d'entrée";
$_lang['contentblocks.inputs'] = "Types d'entrée";
$_lang['contentblocks.name'] = "Nom";
$_lang['contentblocks.columns'] = "Colonnes";
$_lang['contentblocks.columns.description'] = "Les colonnes définissent la manière dont l'agencement est affiché dans le gestionnaire, où la largeur est définie en pourcentage. La référence est utilisée pour un placeholder que vous pouvez utiliser dans le template (modèle).";
$_lang['contentblocks.sortorder'] = "Ordre de tri";
$_lang['contentblocks.icon'] = "Icône";
$_lang['contentblocks.description'] = "Description";
$_lang['contentblocks.template'] = "Modèle";
$_lang['contentblocks.template.description'] = "Le modèle pour l'agencement a plusieurs placeholders disponibles, selon les colonnes et les paramètres que vous avez définis dans les onglets sur la gauche.";
$_lang['contentblocks.width'] = "Largeur";
$_lang['contentblocks.save'] = "Enregistrer";
$_lang['contentblocks.reference'] = "Référence";
$_lang['contentblocks.default_value'] = "Valeur par défaut";
$_lang['contentblocks.fieldtype'] = "Type de Champ";
$_lang['contentblocks.fieldtype.select'] = "Sélectionner";
$_lang['contentblocks.fieldtype.textfield'] = "Texte";
$_lang['contentblocks.fieldtype.link'] = "Lien";
$_lang['contentblocks.fieldtype.textarea'] = "Zone de Texte";
$_lang['contentblocks.fieldoptions'] = "Options du Champ";
$_lang['contentblocks.fieldoptions.description'] = "Utilisé pour les types de champs Select uniquement. Définit les valeurs disponibles comme \"Valeur affichée = placeholder_value\", une par ligne. Si vous n'écrivez qu'une seule valeur par ligne (comme \"foo\"), elle sera utilisée à la fois comme valeur affichée et valeur de placeholder.";
$_lang['contentblocks.field_is_exposed'] = "Exposer le Champ";
$_lang['contentblocks.field_is_exposed.description'] = "Montrez le Champ sur le modèle au lieu de seulement après avoir cliqué sur l'icône Paramètres";
$_lang['contentblocks.field_is_exposed.modal'] = "Afficher les paramètres du Champ dans une fenêtre modale";
$_lang['contentblocks.field_is_exposed.exposedassetting'] = "sdfasjféf";
$_lang['contentblocks.field_is_exposed.exposedasfield'] = "Montrer le Champ sur la mise en page comme un Champ normal.";

$_lang['contentblocks.directory'] = 'Dossier';
$_lang['contentblocks.directory.description'] = 'Un sous-dossier à l\'intérieur du Media Source (soit remplaçant soit utilisant les paramètres système de ContentBlocks)';
$_lang['contentblocks.file_types'] = 'Extensions de fichier autorisées';
$_lang['contentblocks.file_types.description'] = 'Les fichiers avec ces extensions (séparées par une virgule) seront uploadés. Laisser vide pour n\'appliquer aucune restriction.';
$_lang['contentblocks.file_types.disallowed'] = 'Type de fichier non autorisé dans ce Champ.';

// Templates
$_lang['contentblocks.templates'] = 'Templates';
$_lang['contentblocks.templates_desc'] = 'Les templates sont des modèles pré-définis d\'agencements et de champs qui peuvent être utilisés comme raccourcis pour faciliter l\'ajout de contenu.';
$_lang['contentblocks.add_template'] = 'Ajouter un template';
$_lang['contentblocks.edit_template'] = 'Editer le template';
$_lang['contentblocks.duplicate_template'] = 'Dupliquer le template';
$_lang['contentblocks.export_templates'] = 'Exporter les templates';
$_lang['contentblocks.import_templates'] = 'Importer les templates';
$_lang['contentblocks.import_templates.title'] = 'Importer les templates';
$_lang['contentblocks.import_templates.intro'] = 'En uploadant un fichier XML puis en sélectionnant le type d\'import approprié, vous pouvez importer des templates que vous avez exporté au préalable, ou d\'un site différent. <b>Note :</b> les templates contiennent des références aux IDs des champs et des agencements; si vous importez des templates, vous aurez certainement besoin d\'importer les agencements et champs appropriés.';
$_lang['contentblocks.delete_template'] = 'Supprimer le template';
$_lang['contentblocks.delete_template.confirm'] = 'Êtes-vous sûr de vouloir supprimer ce template ?';


// Input types
$_lang['contentblocks.chunk'] = "Chunk";
$_lang['contentblocks.chunk.description'] = "Définir un Chunk qui sera inséré dans le contenu.";
$_lang['contentblocks.chunk.choose_chunk'] = "Choisir un Chunk";
$_lang['contentblocks.chunk.choose_chunk.description'] = "Choisir le Chunk qui doit être inséré.";
$_lang['contentblocks.chunk_template.description'] = "Un modèle pour le chunk. Placeholders disopnibles : <code>[[+tag]]</code>, <code>[[+chunk_name]]</code>";
$_lang['contentblocks.chunk.custom_preview'] = "Aperçu";
$_lang['contentblocks.chunk.custom_preview.description'] = "Par défaut, si ce Champ est laissé vide, l'entrée du Chunk va charger le chunk actuel et l'afficher comme aperçu. Si vous le souhaitez, vous pouvez remplacer cette prévisualisation en entrant le code HTML pour l'aperçu ici.";
$_lang['contentblocks.chunk.no_chunk_set'] = "Ho ho... Il n'y a pas de Chunk défini pour ce champs.";

$_lang['contentblocks.chunkselector'] = 'Sélecteur de Chunk';
$_lang['contentblocks.chunk_selector_template.description'] = 'Le modèle pour le chunk sélectionné. Placeholders disponibles : <code>[[+value]]</code> (contient le chunk complet), <code>[[+chunk_name]]</code> (contient le nom du chunk sélectionné)';
$_lang['contentblocks.chunkselector.description'] = 'Choisir un Chunk à afficher';
$_lang['contentblocks.chunkselector.available_chunks'] = "Noms ou IDs des Chunks autorisés (optionnel)";
$_lang['contentblocks.chunkselector.available_chunks.description'] = "Pour limiter les Chunks disponibles aux Editeurs, spécifiez une liste des noms ou IDs des Chunks séparés par une virgule. Les Chunks de cette liste seront toujours disponibles, indépendamment des autres propriétés ci-dessous.";
$_lang['contentblocks.chunkselector.available_categories'] = "Catégories";
$_lang['contentblocks.chunkselector.available_categories.description'] = "Spécifier une liste de noms ou d'IDs de catégorie pour en limiter les Chunks disponibles.";

$_lang['contentblocks.code'] = "Code";
$_lang['contentblocks.code.description'] = "Affiche une zone de texte avec le code en surbrillance.";
$_lang['contentblocks.code_template.description'] = "La valeur de l'entrée Code est stockée dans l'espace réservé (placeholder) <code>[[+value]]</code>. Selon l'utilisation prévue de ce Champ, vous ajoutez juste l'espace réservé au modèle, ou vous l'encodez (par exemple en faisant <code>&lt;pre&gt;&lt;code&gt [[+value:htmlent]]&lt;/code&gt;&lt;/pre&gt;) pour l'affichage au lieu de l'exécution. L'espace réservé (placeholder) <code>[[+lang]]</code> contient la langue sélectionnée dans la liste déroulante.";
$_lang['contentblocks.code.available_languages'] = "Langues disponibles";
$_lang['contentblocks.code.available_languages.description'] = "Indiquez une liste d'entrées séparées par des virgules <code>value=display</code> pour les langues disponibles avec coloration syntaxique . S'il n'y a qu'une seule langue spécifiée, celle-ci sera sélectionnée et la liste déroulante cachée.";
$_lang['contentblocks.code.default_language'] = "Langue par défaut";
$_lang['contentblocks.code.default_language.description'] = "La langue à sélectionner par défaut.";
$_lang['contentblocks.code.language'] = "Langue";
$_lang['contentblocks.code.entities'] = "Encoder les entités?";
$_lang['contentblocks.code.entities.description'] = "Activé, le code entré aura des entités et des tags Modx MODx encodés pour afficher le code.";

$_lang['contentblocks.file'] = 'Champ "fichier"';
$_lang['contentblocks.file.description'] = 'Ajouter des fichiers à lier';
$_lang['contentblocks.file_template.description'] = 'Les placeholders valides sont <code>[[+url]]</code> <code>[[+title]]</code>, <code>[[+size]]</code> (en octets), <code>[[+upload_date]]</code> et <code>[[+extension]]</code>';
$_lang['contentblocks.file.remove_file'] = 'Supprimer le fichier';
$_lang['contentblocks.file.max_files'] = 'Nombre maximal de fichiers';
$_lang['contentblocks.file.file.or_drop_files'] = 'ou déposez des fichiers ici';
$_lang['contentblocks.file.max_files'] = 'Nombre maximal de fichiers';
$_lang['contentblocks.file.max_files.description'] = 'Définit le nombre maximal de fichiers autorisés par champ de téléchargement. Les fichiers au-delà de la limite seront refusés.';
$_lang['contentblocks.file.max_files.reached'] = 'Désolé, vous ne pouvez pas utiliser plus de [[+max]] fichiers dans cette section.';
$_lang['contentblocks.file.directory'] = 'Dossier';
$_lang['contentblocks.file.directory.description'] = 'Un sous-dossier à l\'intérieur du Media Source (remplaçant ou utilisant les paramètres système de ContentBlocks)';
$_lang['contentblocks.file.file_types'] = 'Extensions de fichier autorisées';
$_lang['contentblocks.file.file_types.description'] = 'Les fichiers avec ces extensions (séparées par une virgule) seront uploadés. Laisser vide pour n\'appliquer aucune restriction.';
$_lang['contentblocks.file.file_types.disallowed'] = 'Type de fichier non autorisé dans ce champ';
$_lang['contentblocks.file.choose_file'] = 'Choisissez un fichier';

$_lang['contentblocks.gallery'] = "Galerie";
$_lang['contentblocks.gallery.description'] = "Une entrée de type galerie comportant l'upload multi-images facile, le tri par glisser/déposer et les attributs de titre.";
$_lang['contentblocks.gallery_template.description'] = "Utilisé pour entourer des images individuelles. Placeholders disponibles : <code>[[+url]]</code> (lien complet vers l'image), <code>[[+title]]</code> (le titre entré pour l'image), <code>[[+size]]</code>, <code>[[+extension]]</code>
";
$_lang['contentblocks.gallery_wrapper_template.description'] = "Utilisé pour entourer toutes les images (comme conteneur). Placeholders disponibles : <code>[[+images]]</code>";
$_lang['contentblocks.gallery_max_images.description'] = "Définit le nombre maximal d'images autorisé par la galerie. Les images supplémentaires au delà de la limite seront refusées.";
$_lang['contentblocks.gallery.thumb_size'] = "Taille de la Vignette";
$_lang['contentblocks.gallery.thumb_size.description'] = "Choisir une des options pour définir la taille d'affichage des Vignettes dans le canvas.";
$_lang['contentblocks.gallery.thumb_size.small'] = "Petit";
$_lang['contentblocks.gallery.thumb_size.medium'] = "Moyen";
$_lang['contentblocks.gallery.thumb_size.large'] = "Grand";
$_lang['contentblocks.gallery.show_description'] = "Montre la Description";
$_lang['contentblocks.gallery.show_description.description'] = "Montre une boîte Description pour permettre à l'éditeur d'ajouter une description plus longue à chacune des images.";
$_lang['contentblocks.gallery.show_link_field'] = "Afficher un champ de lien";
$_lang['contentblocks.gallery.show_link_field.description'] = "Affiche un champ de lien pour que les images puissent être liées à des ressources ou des sites externes.";

$_lang['contentblocks.heading'] = "Entête";
$_lang['contentblocks.heading.description'] = "Une combinaison d'un champ de sélection pour le niveau de titre et d'un champ texte.";
$_lang['contentblocks.heading_template.description'] = "Modèle pour le champ titre. Placeholders disponibles : <code>[[+level]]</code> (la valeur de la liste déroulante de niveau) et <code>[[+value]]</code>(la valeur pour le champ texte).";
$_lang['contentblocks.default_level'] = "Niveau par défaut";
$_lang['contentblocks.available_levels'] = "Niveaux disponibles";
$_lang['contentblocks.heading_default_level.description'] = "La valeur qui doit être sélectionnée par défaut sur les nouvelles instances d'entrée de titre.";
$_lang['contentblocks.heading_available_levels.description'] = "Une liste, séparés par des virgules, d'éléments <code>value=display</code>pour les niveaux disponibles dans la liste déroulante. Pour la valeur à afficher, un préfixe de lexique de <code>contentblocks.</code> est coché et utilisé si disponible. Exemple: <code>h1=heading_1, h2=Second Level,h3=heading_3</code>";
$_lang['contentblocks.heading_1'] = "Titre 1";
$_lang['contentblocks.heading_2'] = "Titre 2";
$_lang['contentblocks.heading_3'] = "Titre 3";
$_lang['contentblocks.heading_4'] = "Titre 4";
$_lang['contentblocks.heading_5'] = "Titre 5";
$_lang['contentblocks.heading_6'] = "Titre 6";

$_lang['contentblocks.hr'] = "Ligne de Séparation (HR)";
$_lang['contentblocks.hr.description'] = "Espace réservé pour un tag <hr> afin d'insérer une ligne horizontale.";
$_lang['contentblocks.hr_template.description'] = "Comment afficher la rangée horizontale. Pas d'espace réservé (placeholder) disponible, mais l'utilisation du tag <code>&lt;hr&gt;</code> est recommandée.";

$_lang['contentblocks.image'] = "Image";
$_lang['contentblocks.image.description'] = "Type d'entrée avec sélection ou upload facile d'images.";
$_lang['contentblocks.image.source'] = "Surcharge du Media Source";
$_lang['contentblocks.image.source.description'] = "Laisser sur (none) pour utiliser le Media Source par défaut du système pour les images, ou choisir un Media Source spécifique pour passer outre ce paramètre pour un Champ spécifique.";
$_lang['contentblocks.image_template.description'] = "Modèle pour l'entrée image. Doit probablement inclure un tag <code>&lt;img&gt;</code>. Espaces réservés (placeholders) disponibles : <code>[[+url]]</code>, <code>[[+size]]</code>, <code>[[+extension]]</code>";
$_lang['contentblocks.imagewithtitle'] = "Image avec Titre";
$_lang['contentblocks.imagewithtitle.description'] = "Identique à Image, mais avec en plus un champ texte pour ajouter un attribut Alt ou Title.";
$_lang['contentblocks.image_with_title'] = $_lang['Image avec titre'];
$_lang['contentblocks.image_with_title_template.description'] = "Modèle pour l'entrée image. Doit probablement inclure un tag <code>&lt;img&gt;</code>. Espaces réservés (placeholders) disponibles : <code>[[+url]]</code>, <code>[[+title]]</code>, <code>[[+size]]</code>, <code>[[+extension]]</code>";

$_lang['contentblocks.list'] = "Liste";
$_lang['contentblocks.list.description'] = "Type d'entrée pour la création facile de listes non-ordonnées (imbriquées).";
$_lang['contentblocks.list_template.description'] = "Modèle pour les éléments individuels de liste. Doit probablement inclure un tag <code>&lt;img&gt;</code>Espaces réservés (placeholders) disponibles : <code>[[+value]]</code> (le texte de l'élément de liste), <code>[[+idx]]</code> (un numéro d'article à incrémentation, à partir de 1 à chaque niveau) and <code>[[+items]]</code> (sous-listes, mises en forme avec d'autres modèles).";
$_lang['contentblocks.list_wrapper_template.description'] = "Modèle externe pour les listes. Doit probablement contenir un tag <code>&lt;ul&gt;</code>. Espace réservé (placeholder) disponible: <code>[[+items]]</code> (éléments de la liste mis en forme avec d'autres modèles).";
$_lang['contentblocks.list_nested_template.description'] = "Modèle intérieur pour sous-listes avec retrait. Doit probablement contenir un tag <code>&lt;ul&gt;</code>. Espace réservé (placeholder) disponible: <code>[[+items]]</code> (éléments de la liste mis en forme avec d'autres modèles).";

$_lang['contentblocks.orderedlist'] = "Liste ordonnée";
$_lang['contentblocks.orderedlist.description'] = "Comme pour le type Liste, mais avec une liste ordonnée à la place.";
$_lang['contentblocks.ordered_list'] = $_lang['Liste ordonnée'];
$_lang['contentblocks.ordered_list_template.description'] = "Modèle pour éléments individuels de liste. Doit probablement contenir un tag <code>&lt;li&gt;</code>.  Espaces réservés (placeholders) disponibles: <code>[[+value]]</code> (le texte de l'élément de liste), <code>[[+idx]]</code> (un numéro d'article à incrémentation, à partir de 1 à chaque niveau) and <code>[[+items]]</code> (sous-listes, mises en forme avec d'autres modèles).";
$_lang['contentblocks.ordered_list_wrapper_template.description'] = "Modèle externe pour les listes ordonnées. Doit probablement contenir un tag <code>&lt;ul&gt;</code>. Espace réservé (placeholder) disponible: <code>[[+items]]</code> (éléments de la liste mis en forme avec d'autres modèles).";
$_lang['contentblocks.ordered_list_nested_template.description'] = "Modèle intérieur pour sous-listes avec retrait. Doit probablement contenir un tag <code>&lt;ul&gt;</code>. Espace réservé (placeholder) disponible: <code>[[+items]]</code> (éléments de la liste mis en forme avec d'autres modèles).";

$_lang['contentblocks.quote'] = "Citation";
$_lang['contentblocks.quote.description'] = "Zone de texte combinée avec un petit Champ texte pour citations.";
$_lang['contentblocks.quote_template.description'] = "Modèle pour la citation, Doit probablement inclure un tag <code>&lt;blockquote&gt;</code> et <code>&lt;cite&gt;</code>. Espaces réservés (placeholders) disponibles : <code>[[+value]]</code> (l'entrée citation) and <code>[[+cite]]</code> (la petite entrée auteur).";
$_lang['contentblocks.quote.author'] = "Auteur";

$_lang['contentblocks.repeater'] = "Répéteur";
$_lang['contentblocks.repeater.description'] = "Permet de définir un groupe de champs, que l'éditeur pourra alors \"répéter\" comme une seule entité.";
$_lang['contentblocks.repeater_template.description'] = "Le modèle pour chaque ligne du \"répéteur\". Il n'y a pas de défaut car cela dépend entièrement de la configuration des groupes! Pour chacun des champs définis, vous devrez indiquer une clé. Le \"répéteur\" procédera en premier lieu à l'analyse des champs via leurs processeurs dédiés (un champ image sera donc \"analysé\" en premier lieu, comme s'il s'agissait d'un champ image indépendant), et le résultat sera stocké dans le placeholder (la clé que vous aurez défini). Veuillez consulter la documentation sur modmore.com pour une explication plus approfondie du fonctionnement des champs \"répéteur\".";
$_lang['contentblocks.repeater.width'] = "Largeur (en %)";
$_lang['contentblocks.repeater.key'] = "Clé";
$_lang['contentblocks.repeater.group'] = "Groupe";
$_lang['contentblocks.repeater.group.description'] = "Le champ \"répéteur\" permet de répéter un groupe de champs. C'est où vous indiquez les champs qui sont à répéter.";
$_lang['contentblocks.repeater.max_items'] = "Nombre maximal d'éléments";
$_lang['contentblocks.repeater.max_items.description'] = "Lorsque la valeur d'un nombre supérieur à 0, il sera impossible d'ajouter des éléments au-delà de cette limite.";
$_lang['contentblocks.repeater.max_items_reached'] = "Désolé, vous n'êtes pas autorisé à ajouter plus de [[+max]] éléments.";
$_lang['contentblocks.repeater.add_item'] = "Ajouter une entrée";
$_lang['contentblocks.repeater.delete_item'] = "Supprimer l'entrée";
$_lang['contentblocks.repeater.wrapper_template.description'] = "Modèle contenant toutes les autres lignes. Doit contenir le placeholder <code>[[+rows]]</code>.";
$_lang['contentblocks.repeater.row_separator'] = "Séparateur de ligne";
$_lang['contentblocks.repeater.row_separator.description'] = "Une chaîne joindre les lignes. Cela peut être simplement quelques sauts de ligne (par défaut) ou tout code HTML que vous souhaitez entre chaque ligne.";


$_lang['contentblocks.richtext'] = "Texte Riche";
$_lang['contentblocks.richtext.description'] = "Simple Champs de Texte Riche. Supporte TinyMCE et Redactor.";
$_lang['contentblocks.richtext_template.description'] = "Comme les Champs de texte riche gèrent typiquement leur propre génération de balisage, le modèle d'entrée de texte riche  est généralement juste l'espace réservé <code>[[+value]]</code>, bien que vous pourriez l'envelopper dans un conteneur ou quelque chose d'autre.";

$_lang['contentblocks.table'] = "Tableau";
$_lang['contentblocks.table.description'] = "Widget interactif pour données tabulaires.";
$_lang['contentblocks.table_template.description'] = "Modèle à utiliser pour chaque cellule du tableau. Devra vraisemblablement contenir un tag &lt;td&gt;. Les placeholders disponibles sont :  <code>[[+cell]]</code>, <code>[[+colIdx]]</code>, <code>[[+colTotal]]</code>";
$_lang['contentblocks.table.row_template'] = "Modèle de rangée";
$_lang['contentblocks.table.row_template.description'] = "Le modèle à utiliser pour chaque rangée du tableau, devra vraisemblablement contenir un tag <code>&lt;tr&gt;</code>. Les placeholders disponibles sont : <code>[[+row]]</code> (contient chaque cellule de la rangée), <code>[[+idx]]</code>";
$_lang['contentblocks.table.wrapper_template.description'] = "Le modèle contenant le tableau. Placeholders disponibles : <code>[[+body]]</code>, <code>[[+total]]</code>.";

$_lang['contentblocks.textarea'] = "Zone de Texte";
$_lang['contentblocks.textarea.description'] = "Champs texte simple multi lignes.";

$_lang['contentblocks.textfield'] = "Champ texte";
$_lang['contentblocks.textfield.description'] = "Champs Texte simple, une ligne unique";
$_lang['contentblocks.textfield_template.description'] = "Pour le champ texte, utiliser simplement <code>[[+value]]</code> avec un conteneur à votre choix ( paragraphe, titre, etc,...).";

$_lang['contentblocks.video'] = "Vidéo";
$_lang['contentblocks.video.description'] = "Intégration YouTube permettant de rechercher par mot-clé et de coller des liens YouTube pour insérer facilement des vidéos.";
$_lang['contentblocks.video_template.description'] = "En utilisant un type d'entrée Video, l'ID de la Vidéo YouTube est stockée dans le placeholder <code>[[+value]]</code>. Ceci peut-être utilisé pour générer le code intégré dans ce modèle.";
$_lang['contentblocks.video.search'] = "Rechercher !";
$_lang['contentblocks.video.search_introduction'] = "Utiliser la boîte de recherche ci-dessous pour chercher des vidéos Youtube.";
$_lang['contentblocks.video.enter_keywords'] = "Entrer un ou plusieurs mots-clés...";
$_lang['contentblocks.video.load_more_results'] = "Charger plus de résultats";
$_lang['contentblocks.video.search_youtube'] = "Chercher sur Youtube";
$_lang['contentblocks.video.paste_link'] = "Coller un lien ici";
$_lang['contentblocks.video.youtube_not_loaded'] = "L'API YouTube n'a pas été chargée. Merci de réessayer dans quelques instants. Si le problème persiste, l'API peut être indisponible pour l'instant.";
$_lang['contentblocks.video.api_error'] = "Tiens, tiens , une erreur est survenue : [[+message]] (Code [[+code]])";

// Snippet
$_lang['contentblocks.snippet'] = "Snippet";
$_lang['contentblocks.snippet.description'] = "Permet à l'utilisateur de choisir un snippet et d'entrer des propriétés pour ce snippet.";
$_lang['contentblocks.snippet.available_snippets'] = "Nom ou IDs des Snippets autorisés (Option)";
$_lang['contentblocks.snippet.available_snippets.description'] = "Pour limiter les snippets disponibles à l'utilisateur, définissez une liste de noms ou d'IDs de snippet séparés par une virgule. Les snippets de cette liste seront toujours disponibles, indépendamment des autres propriétés en-dessous.";
$_lang['contentblocks.snippet.categories'] = "Catégories";
$_lang['contentblocks.snippet.categories.description'] = "Spécifier une liste de noms ou d'IDs de catégories afin d'en limiter les snippets disponibles.";
$_lang['contentblocks.snippet.add_property'] = "Ajouter une  propriété";
$_lang['contentblocks.snippet.choose_snippet'] = "Choisir un snippet";
$_lang['contentblocks.snippet.other_property'] = "Autre (entrée manuelle)";
$_lang['contentblocks.snippet.other_property.desc'] = "Toutes les propriétés à ajouter à la fin de l'appel du snippet peuvent être spécifiés ici. Assurez-vous d'utiliser la syntaxe de la balise appropriée, comme ceci: &property=`value`";
$_lang['contentblocks.snippet.allow_uncached'] = "Permettre la non mise en cache?";
$_lang['contentblocks.snippet.allow_uncached.description'] = "Lorsque cette option est activée, une option \"Non mise en cache?\" est disponible pour les snippets. Si désactivée, tous les snippets seront appelés cachés.";
$_lang['contentblocks.snippet.uncached'] = "Mettre en cache?";
$_lang['contentblocks.snippet.uncached_0'] = "Oui";
$_lang['contentblocks.snippet.uncached_1'] = "Non, ne pas mettre en cache ce snippet";
$_lang['contentblocks.snippet.none_available'] = "Il n'y a pas de snippets disponible pour ce Champ.";

$_lang['contentblocks.layout_template.description'] = 'Le modèle pour ce champ d\'agencement imbriqué. Gardez en tête que chaque agencement imbriqué verra également ses modèles traités. Les placeholders disponibles sont : <code>[[+value]]</code> (l\'HTML de chaque layout)';
$_lang['contentblocks.layoutfield.available_layouts'] = "Agencement(s) disponible(s)";
$_lang['contentblocks.layoutfield.available_layouts.description'] = "Liste, séparé par des virgules, de layouts devant être autorisés. Pour n'autoriser aucun layout (par exemple pour n'autoriser que l'insertion de template), indiquez \"-1\".";
$_lang['contentblocks.layoutfield.available_templates'] = "Template(s) disponible(s)";
$_lang['contentblocks.layoutfield.available_templates.description'] = "Liste, séparée par de virgules, de modèles devant être autorisés. Pour n'autoriser aucun modèle, indiquez \"-1\".";

// Image related
$_lang['contentblocks.choose_image'] = "Choisir une image";
$_lang['contentblocks.wrapper_template'] = "Modèle d'enveloppe";
$_lang['contentblocks.nested_template'] = "Modèle imbriqué";
$_lang['contentblocks.max_images'] = "Nombre d'images maximum";
$_lang['contentblocks.max_images_reached'] = "Désolé, vous ne pouvez utiliser plus de [[+max]] images dans cette galerie.";
$_lang['contentblocks.upload_error'] = "Tiens, tiens, quelque chose s'est mal passé lors de l'envoi de [[+file]] : [[+message]]";
$_lang['contentblocks.upload_error.file_too_big'] = "\"\\n\\nLe fichier est peut-être trop grand.";

// Misc
$_lang['contentblocks.use_contentblocks'] = "Utiliser ContentBlocks?";
$_lang['contentblocks.use_contentblocks.description'] = "Lorsque cette option est activée, la zone de contenu est remplacée par un canvas ContentBlocks pour créer du contenu multi-colonnes structuré.";
$_lang['contentblocks.or'] = "ou";
$_lang['contentblocks.title'] = "Titre";
$_lang['contentblocks.delete'] = "Supprimer";
$_lang['contentblocks.delete_video'] = "Supprimer la vidéo";
$_lang['contentblocks.move_layout_up'] = "Monter";
$_lang['contentblocks.move_layout_down'] = "Descendre";
$_lang['contentblocks.delete_image'] = "Supprimer l'image";
$_lang['contentblocks.add_content'] = "Ajouter du contenu";
$_lang['contentblocks.add_content.introduction'] = "Merci de sélectionner le type de contenu à insérer dans l'agencement. Passez la souris sur le nom pour afficher une description longue.";
$_lang['contentblocks.add_layout'] = "Ajouter un agencement";
$_lang['contentblocks.add_layout.introduction'] = "Choisir l'agencement à ajouter au contenu.";
$_lang['contentblocks.upload'] = "Envoyer";
$_lang['contentblocks.choose'] = "Choisir";
$_lang['contentblocks.image.or_drop_images'] = "ou déposez des images ici";
$_lang['contentblocks.image.or_drop_image'] = "ou déposez une image ici";
$_lang['contentblocks.use_tinyrte'] = "Utiliser Tiny RTE ?";
$_lang['contentblocks.use_tinyrte.description'] = "Lorsque cette option est activée, l'entrée est améliorée avec un petit éditeur de texte riche qui permet le formatage simple (gras, italique et liens).";
$_lang['contentblocks.use_tinyrte.description.image'] = "Lorsque cette option est activée, l'entrée titre est améliorée avec un petit éditeur de texte riche qui permet le formatage simple (gras, italique et liens). Si vous utilisez l'entrée titre pour un texte alt ou un attribut title, vous devrez peut-être ajouter un traitement supplémentaire (par ex. htmlentities) pour empêcher le balisage ajouté de casser votre balise img. ";

$_lang['contentblocks.rebuild_content'] = "Reconstruire le contenu";
$_lang['contentblocks.rebuild_content.confirm'] = "En reconstruisant le contenu, toutes les ressources seront régénérées à partir de leur contenu structuré. Cela signifie que tous les agencements et tous les champs utilisés précédemment seront analysés à nouveau et l'ancien contenu écrasés. Selon la taille du site, ceci peut prendre entre quelques secondes et plusieurs minutes. Pour démarrer ce processus, cliquez sur Oui ci-dessous.";
$_lang['contentblocks.rebuild_content.initialising'] = "Initialisation...";
$_lang['contentblocks.rebuild_content.resources_found'] = "Trouvé un total de [[+total]] ressources. La reconstruction va prendre ~ [[+estimate]] minutes.";
$_lang['contentblocks.rebuild_content.loading_dependencies'] = "Chargement des dépendances pour l'analyse du contenu...";
$_lang['contentblocks.rebuild_content.loaded_dependencies'] = "Chargement des dépendances, début de la reconstruction du contenu...";
$_lang['contentblocks.rebuild_content.skipping_not_allowed'] = "Saut #[[+id]] ([[+pagetitle]]), ContentBlocks a pour instruction de ne pas agir sur cette Ressource (Type: [[+class_key]])";
$_lang['contentblocks.rebuild_content.skipping_not_used'] = "Saut #[[+id]] ([[+pagetitle]]), n'utilise pas ContentBlocks pour l'instant.";
$_lang['contentblocks.rebuild_content.skipping_corrupt'] = "Saut #[[+id]] ([[+pagetitle]]), le contenu est invalide ou manquant.";
$_lang['contentblocks.rebuild_content.done'] = "Contenu re-créé ! [[+total_rebuild]] ressources ont été modifiées, [[+total_skipped]] ont été ignorées et [[+total_skipped_broken]] ont été ignorées à cause de contenu non valide.";
$_lang['contentblocks.rebuild_content.clear_cache'] = "Vidage du cache du/des contexte(s): [[+contexts]]";
$_lang['contentblocks.rebuild_content.clear_cache_complete'] = "Cache vidé. Tout est fait !";
$_lang['contentblocks.generating_canvas'] = "Génération du contenu du Canvas... Cela ne prendra qu'un instant.";
$_lang['contentblocks.content'] = "Contenus de modèle";
$_lang['contentblocks.open_template_builder'] = "Créer le modèle";
$_lang['contentblocks.template_builder'] = "Générateur de modèle";

/**
 * Settings. Oh boy.
 */

$_lang['setting_contentblocks.accepted_resource_types'] = "Types de Ressources acceptés.";
$_lang['setting_contentblocks.accepted_resource_types_desc'] = "Une liste de Clés de Classe de Ressource séparées par une virgule que ContentBlocks tentera d'améliorer.";

$_lang['setting_contentblocks.clear_cache_after_rebuild'] = "Vider le cache après reconstruction";
$_lang['setting_contentblocks.clear_cache_after_rebuild_desc'] = "Lorsque cette option est activée, la fonction de reconstruction des contenus videra automatiquement le cache de la ressource à la fin de son exécution.";

$_lang['setting_contentblocks.debug'] = "Déboguer";
$_lang['setting_contentblocks.debug_desc'] = "Lorsque cette option est activée, ContentBlocks utilisera du Javascript non-minifié dans le Manager pour simplifier les problèmes de débugage.";

$_lang['setting_contentblocks.disabled'] = "Désactivé";
$_lang['setting_contentblocks.disabled_desc'] = "Régler ce paramètre sur 1 pour désactiver entièrement ContentBlocks sur ce site. Cela peut-être outrepassé au niveau du Contexte pour utiliser ContentBlocks uniquement dans certains Contextes spécifiques. ";

$_lang['setting_contentblocks.implode_string'] = "Imploser la Chaîne";
$_lang['setting_contentblocks.implode_string_desc'] = "Le lien entre le Champ individuel et l'affichage des Blocs  lors de l'analyse du contenu.";

$_lang['setting_contentblocks.default_layout'] = "Agencement par défaut";
$_lang['setting_contentblocks.default_layout_desc'] = "Indiquez l'ID de l'agencement par défaut à utiliser pour les nouvelles ressources, ou pour les ressources n'ayant pas encore été utilisées/éditées avec ContentBlocks. Depuis la version 1.2, ceci ne s'applique que si aucun modèle par défaut n'est trouvé.";

$_lang['setting_contentblocks.default_layout_part'] = "Colonne par défaut";
$_lang['setting_contentblocks.default_layout_part_desc'] = "Indiquez la référence de la colonne de l'agencement par défaut. Pour les nouvelles ressources (ou les ressources n'ayant pas été utilisées/éditées avec ContentBlocks), un champ (défini par le paramètre \"Champ par défaut\") sera inséré dans la colonne. Depuis la version 1.2, ceci ne s'applique que si aucun modèle par défaut n'est trouvé.";

$_lang['setting_contentblocks.default_field'] = "Champ par défaut";
$_lang['setting_contentblocks.default_field_desc'] = "Indiquez l'ID d'un champ à insérer dans la colonne par défaut de l'agencement par défaut que vous avez indiqué. Lorsque 0 est utilisé, un champ simple éditeur de texte ou textarea sera utilisé. Depuis la version 1.2, ceci ne s'applique que lorsqu'aucun modèle par défaut n'est trouvé.";

$_lang['setting_contentblocks.code.theme'] = "Thème Code";
$_lang['setting_contentblocks.code.theme_desc'] = "Le thème à utiliser pour l'insertion de Code. Voir la documentation de Ace pour les possibilités.";

$_lang['setting_contentblocks.image.hash_name'] = "Nom haché";
$_lang['setting_contentblocks.image.hash_name_desc'] = "Lorsque cette option est activée, le nom des fichiers sera haché pour cacher leur nom original.";

$_lang['setting_contentblocks.image.prefix_time'] = "Préfixe de temps";
$_lang['setting_contentblocks.image.prefix_time_desc'] = "Lorsque cette option est activée, les fichiers uploadés auront leur nom préfixé d'un horodatage (timestamp) unix.";

$_lang['setting_contentblocks.image.sanitize'] = "Assainir";
$_lang['setting_contentblocks.image.sanitize_desc'] = "Lorsque cette option est activée, le nom des fichiers uploadés sera assaini avant l'envoi afin qu'il n'y ait pas de caractères spéciaux. L'assainissement supporte aussi la translittération avec iconv ou une librairie de translittération tierce.";

$_lang['setting_contentblocks.image.source'] = "Source";
$_lang['setting_contentblocks.image.source_desc'] = "	
assainir
";

$_lang['setting_contentblocks.image.upload_path'] = "Chemin pour l'Upload";
$_lang['setting_contentblocks.image.upload_path_desc'] = "Le chemin, dans le Media Source défini, vers lequel les fichiers doivent être uploadés. Cela supporte les espaces réservés  (placeholders) [[+year]], [[+month]], [[+day]], [[+user]], [[+username]] and [[+resource]].";

$_lang['setting_contentblocks.sanitize_pattern'] = "Assainir le modèle";
$_lang['setting_contentblocks.sanitize_pattern_desc'] = "Un modèle d'expression rationnelle (RegEx) à utiliser pour assainir les noms de fichiers qui doivent être assainis.";

$_lang['setting_contentblocks.sanitize_replace'] = "Assainir le remplacement";
$_lang['setting_contentblocks.sanitize_replace_desc'] = "Une chaîne pour assainir les occurrences de l'expression rationnelle (RegEx).";

$_lang['setting_contentblocks.custom_icon_path'] = "Chemin personnalisé de l'icône";
$_lang['setting_contentblocks.custom_icon_path_desc'] = "Chemin vers les icônes. {assets_path} est autorisé.";

$_lang['setting_contentblocks.custom_icon_url'] = "URL personnalisée de l'icône";
$_lang['setting_contentblocks.custom_icon_url_desc'] = "URL personnalisée vers les icônes. {assets_url} est autorisé.";

$_lang['setting_contentblocks.translit'] = "Transcription";
$_lang['setting_contentblocks.translit_desc'] = "Lorsqu'il est réglé à une valeur qui n'est pas \"aucun\" ou vide, cela active la transcription avant le processus d'assainissement, permettant de traduire des caractères non valides par des valides. Si cette valeur est vide, il hérite du paramètre core \"friendly_alias_translit\".";

$_lang['setting_contentblocks.hide_logo'] = "Masquer le logo";
$_lang['setting_contentblocks.hide_logo_desc'] = "Par défaut, nous affichons un petit logo modmore en bas à droite de l'extension Content Blocks. Si pour quelque raison que se soit, vous ne souhaitez pas afficher ce logo, activez ce paramètre et il disparaîtra.";

$_lang['setting_contentblocks.translit_class'] = "Classe de transcription";
$_lang['setting_contentblocks.translit_class_desc'] = "Le nom de la classe à utiliser pour la transcription. Si cette valeur est vide, elle sera héritée du paramètre core \"friendly_alias_translit_class\".";
$_lang['setting_contentblocks.translit_class_path'] = "Chemin vers la classe de transcription";
$_lang['setting_contentblocks.translit_class_path_desc'] = "Le chemin vers la classe de transcription à utiliser. Si cette valeur est vide, la valeur du paramètre \"friendly_alias_translit_class_path\" sera utilisée.";
