<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\DataFixtures\LoadPokemonTypeData;
use App\Entity\Pokemon;

class LoadPokemonData extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les pokemon à insérer */
	    $pokemons = array(
		    array(    
		      	'name' => 'Bulbizarre',
		      	'number' => 1,
		      	'description' => 'La graine sur le dos de Bulbizarre est une réserve de nutriments. Il la fait doucement pousser en absorbant les rayons du soleil, et emmagasine de l\'énergie dedans en vue de son évolution. S\'il dépense trop souvent son énergie, il n\'évoluera pas car l\'ouverture de son bulbe dépend de ses réserves de nutriments.',
		    ),
		    array(
		      	'name' => 'Herbizarre',
		      	'number' => 2,
		      	'description' => 'Le bulbe sur le dos de Herbizarre a éclos, dévoilant ainsi une fleur fermée. Plus il passe de temps au soleil, plus sa fleur se prépare à s\'ouvrir, et quelques temps avant son évolution, il dégage une douce odeur fruitée. Attention à ses Tranch\'herbes et à ses Fouets lianes.',
		    ),
		    array(
		      	'name' => 'Florizarre',
		      	'number' => 3,
		      	'description' => 'Comme un panneau solaire, les pétales de la fleur de Florizarre transforment les rayons du soleil en énergie. Il est maître d\'un troupeau de Herbizarre et de Bulbizarre, qu\'il garde férocement. L\'odeur se dégageant de sa fleur est exquise, mais mieux vaut ne pas s\'approcher d\'un Florizarre sauvage et de sa horde.',
		    ),
            array(
		      	'name' => 'Salamèche',
		      	'number' => 4,
		      	'description' => 'La flamme qui brûle au bout de sa queue indique l’humeur de ce Pokémon. Elle vacille lorsque Salamèche est content. En revanche, lorsqu’il s’énerve, la flamme prend de l’importance et brûle plus ardemment.',
		    ),
            array(
		      	'name' => 'Reptincel',
		      	'number' => 5,
		      	'description' => '	Reptincel lacère ses ennemis sans pitié grâce à ses griffes acérées. S’il rencontre un ennemi puissant, il devient agressif et la flamme au bout de sa queue s’embrase et prend une couleur bleu clair.',
		    ),
            array(
		      	'name' => 'Dracaufeu',
		      	'number' => 6,
		      	'description' => 'Dracaufeu parcourt les cieux pour trouver des adversaires à sa mesure. Il crache de puissantes flammes capables de faire fondre n’importe quoi. Mais il ne dirige jamais son souffle destructeur vers un ennemi plus faible.',
		    ),
            array(
		      	'name' => 'Carapuce',
		      	'number' => 7,
		      	'description' => 'Les bébés Carapuce sont extrêmement vulnérables à la naissance, car leur carapace est toute molle. C\'est pourquoi ils boivent régulièrement une eau riche en minéraux. Elle devient ensuite dure comme de la pierre. S\'il est menacé, il se réfugie à l\'intérieur et envoie un jet d\'eau à son agresseur.',
		    ),
            array(
		      	'name' => 'Carabaffe',
		      	'number' => 8,
		      	'description' => 'Carabaffe a une large queue recouverte d’une épaisse fourrure. Elle devient de plus en plus foncée avec l’âge. Les éraflures sur la carapace de ce Pokémon témoignent de son expérience au combat.',
		    ),
             array(
		      	'name' => 'Tortank',
		      	'number' => 9,
		      	'description' => 'Tortank dispose de canons à eau émergeant de sa carapace. Ils sont très précis et peuvent envoyer des balles d’eau capables de faire mouche sur une cible située à plus de 5 m.',
		    ),
            array(
		      	'name' => 'Chenipan',
		      	'number' => 10,
		      	'description' => 'Chenipan a un appétit d’ogre. Il peut engloutir des feuilles plus grosses que lui. Les antennes de ce Pokémon dégagent une odeur particulièrement entêtante.',
		    ),
            array(
		      	'name' => 'Chrysacier',
		      	'number' => 11,
		      	'description' => 'La carapace protégeant ce Pokémon est dure comme du métal. Chrysacier ne bouge pas beaucoup. Il reste immobile pour préparer les organes à l’intérieur de sa carapace en vue d’une évolution future.',
		    ),
            array(
		      	'name' => 'Papilusion',
		      	'number' => 12,
		      	'description' => 'Papilusion est très doué pour repérer le délicieux nectar qu’il butine dans les fleurs. Il peut détecter, extraire et transporter le nectar de fleurs situées à plus de 1 km de son nid.',
		    ),
            array(
		      	'name' => 'Aspicot',
		      	'number' => 13,
		      	'description' => 'L’odorat d’Aspicot est extrêmement développé. Il lui suffit de renifler ses feuilles préférées avec son gros appendice nasal pour les reconnaître entre mille.',
		    ),
            array(
		      	'name' => 'Coconfort',
		      	'number' => 14,
		      	'description' => 'Coconfort est la plupart du temps immobile et reste accroché à un arbre. Cependant, intérieurement, il est très actif, car il se prépare pour sa prochaine évolution. En touchant sa carapace, on peut sentir sa chaleur.',
		    ),
            array(
		      	'name' => 'Dardargnan',
		      	'number' => 15,
		      	'description' => 'Dardargnan est extrêmement possessif. Il vaut mieux ne pas toucher son nid si on veut éviter d’avoir des ennuis. Lorsqu’ils sont en colère, ces Pokémon attaquent en masse.',
		    ),
            array(
		      	'name' => 'Roucool',
		      	'number' => 16,
		      	'description' => 'Roucool a un excellent sens de l’orientation. Il est capable de retrouver son nid sans jamais se tromper, même s’il est très loin de chez lui et dans un environnement qu’il ne connaît pas.',
		    ),
            array(
		      	'name' => 'Roucoups',
		      	'number' => 17,
		      	'description' => 'Roucoups utilise une vaste surface pour son territoire. Ce Pokémon surveille régulièrement son espace aérien. Si quelqu’un pénètre sur son territoire, il corrige l’ennemi sans pitié d’un coup de ses terribles serres.',
		    ),
            array(
		      	'name' => 'Roucarnage',
		      	'number' => 18,
		      	'description' => 'Ce Pokémon est doté d’un plumage magnifique et luisant. Bien des Dresseurs sont captivés par la beauté fatale de sa huppe et décident de choisir Roucarnage comme leur Pokémon favori.',
		    ),
            array(
		      	'name' => 'Rattata',
		      	'number' => 19,
		      	'description' => 'Rattata est extrêmement prudent. Même lorsqu’il est endormi, il fait pivoter ses oreilles pour écouter autour de lui. En ce qui concerne son habitat, il n’est vraiment pas difficile. Il peut faire son nid n’importe où.',
		    ),
            array(
		      	'name' => 'Rattatac',
		      	'number' => 20,
		      	'description' => 'Les crocs robustes de Rattatac poussent constamment. Pour éviter qu’ils raclent le sol, il se fait les dents sur des cailloux ou des troncs d’arbre. Il lui arrive même de ronger les murs des maisons.',
		    ),
            array(
		      	'name' => 'Piafabec',
		      	'number' => 21,
		      	'description' => 'Piafabec crie tellement fort qu’il peut être entendu à 1 km de distance. Ces Pokémon se préviennent d’un danger en entonnant une mélopée très aiguë, qu’ils se renvoient les uns les autres, comme un écho.',
		    ),
            array(
		      	'name' => 'Rapasdepic',
		      	'number' => 22,
		      	'description' => 'On reconnaît un Rapasdepic à son long cou et à son bec allongé. Ces attributs lui permettent d’attraper facilement ses proies dans la terre ou dans l’eau. Il bouge son bec long et fin avec une grande agilité.',
		    ),
            array(
		      	'name' => 'Abo',
		      	'number' => 23,
		      	'description' => 'Abo s’enroule en spirale pour dormir. Sa tête reste relevée de telle sorte que cette position lui permette de réagir rapidement si une menace survenait.',
		    ),
            array(
		      	'name' => 'Arbok',
		      	'number' => 24,
		      	'description' => 'Ce Pokémon doté d’une force extraordinaire peut étrangler ses proies avec son corps. Il peut même écraser des tonneaux métalliques. Une fois sous l’étreinte d’Arbok, il est impossible de lui échapper.',
		    ),
            array(
		      	'name' => 'Pikachu',
		      	'number' => 25,
		      	'description' => 'Ce Pokémon dispose de petites poches dans les joues pour stocker de l’électricité. Elles semblent se charger pendant que Pikachu dort. Il libère parfois un peu d’électricité lorsqu’il n’est pas encore bien réveillé.',
		    ),
            array(
		      	'name' => 'Raichu',
		      	'number' => 26,
		      	'description' => 'Ce Pokémon libère un faible champ électrique tout autour de son corps, ce qui le rend légèrement lumineux dans le noir. Raichu plante sa queue dans le sol pour évacuer de l’électricité.',
		    ),
            array(
		      	'name' => 'Sabelette',
		      	'number' => 27,
		      	'description' => '	Sabelette a une peau très sèche et extrêmement dure. Ce Pokémon peut s’enrouler sur lui-même pour repousser les attaques. La nuit, il s’enterre dans le sable du désert pour dormir.',
		    ),
            array(
		      	'name' => 'Sablaireau',
		      	'number' => 28,
		      	'description' => '	Sablaireau peut enrouler son corps pour prendre la forme d’une balle hérissée de pointes. Ce Pokémon essaie de faire peur à son ennemi en le frappant avec ses pointes. Puis, il se rue sur lui avec ses griffes acérées.',
		    ),
            array(
		      	'name' => 'Nidoran♀',
		      	'number' => 29,
		      	'description' => 'Nidoran♀ est couvert de pointes qui sécrètent un poison puissant. On pense que ce petit Pokémon a développé ces pointes pour se défendre. Lorsqu’il est en colère, une horrible toxine sort de sa corne.',
		    ),
            array(
		      	'name' => 'Nidorina',
		      	'number' => 30,
		      	'description' => 'Lorsqu’un Nidorina est avec ses amis ou sa famille, il replie ses pointes pour ne pas blesser ses proches. Ce Pokémon devient vite nerveux lorsqu’il est séparé de son groupe.',
		    ),
            array(
		      	'name' => 'Nidoqueen',
		      	'number' => 31,
		      	'description' => 'Le corps de Nidoqueen est protégé par des écailles extrêmement dures. Il aime envoyer ses ennemis voler en leur fonçant dessus. Ce Pokémon utilise toute sa puissance lorsqu’il protège ses petits.',
		    ),
            array(
		      	'name' => 'Nidoran♂',
		      	'number' => 32,
		      	'description' => 'Nidoran♂ a développé des muscles pour bouger ses oreilles. Ainsi, il peut les orienter à sa guise. Ce Pokémon peut entendre le plus discret des bruits.',
		    ),
              array(
		      	'name' => 'Nidorino',
		      	'number' => 33,
		      	'description' => 'Nidorino dispose d’une corne plus dure que du diamant. S’il sent une présence hostile, toutes les pointes de son dos se hérissent d’un coup, puis il défie son ennemi.',
		    ),
              
              array(
		      	'name' => 'Nidoking',
		      	'number' => 34,
		      	'description' => 'L’épaisse queue de Nidoking est d’une puissance incroyable. En un seul coup, il peut renverser une tour métallique. Lorsque ce Pokémon se déchaîne, plus rien ne peut l’arrêter.',
		    ),
              
              array(
		      	'name' => 'Mélofée',
		      	'number' => 35,
		      	'description' => 'Les nuits de pleine lune, des groupes de ces Pokémon sortent jouer. Lorsque l’aube commence à poindre, les Mélofée fatigués rentrent dans leur retraite montagneuse et vont dormir, blottis les uns contre les autres.',
		    ),
			array(
				'name' => 'Mélodelfe',
				'number' => 36,
				'description' => 'Les Mélodelfe se déplacent en sautant doucement, comme s’ils volaient. Leur démarche légère leur permet même de marcher sur l’eau. On raconte qu’ils se promènent sur les lacs, les soirs où la lune est claire.',
			),
			array(
				'name' => 'Goupix',
				'number' => 37,
				'description' => 'À l’intérieur du corps de Goupix se trouve une flamme qui ne s’éteint jamais. Pendant la journée, lorsque la température augmente, ce Pokémon crache des flammes pour éviter que son corps ne devienne trop chaud.',
			),
			array(
				'name' => 'Feunard',
				'number' => 38,
				'description' => 'La légende raconte que Feunard est apparu lorsque neuf sorciers aux pouvoirs sacrés décidèrent de fusionner. Ce Pokémon est très intelligent. Il comprend la langue des hommes.',
			),
			array(
				'name' => 'Rondoudou',
				'number' => 39,
				'description' => 'Lorsque ce Pokémon chante, il ne s’arrête pas pour respirer. Quand il se bat contre un adversaire qu’il ne peut pas facilement endormir, Rondoudou reste donc sans respirer, mettant sa vie en danger.',
			),
			array(
				'name' => 'Grodoudou',
				'number' => 40,
				'description' => 'Le corps de Grodoudou est très élastique. S’il inspire profondément, ce Pokémon peut se gonfler à volonté. Une fois gonflé, Grodoudou peut rebondir comme un ballon.',
			),
			array(
				'name' => 'Nosferapti',
				'number' => 41,
				'description' => 'Nosferapti évite la lumière du soleil, car ça le rend malade. Pendant la journée, il reste dans les cavernes ou à l’ombre des vieilles maisons, où il dort, la tête à l’envers.',
			),
			array(
				'name' => 'Nosferalto',
				'number' => 42,
				'description' => 'Nosferalto mord sa proie grâce à ses quatre crocs pour boire son sang. Il ne sort que lorsque la nuit est noire et sans lune, pour voleter en quête de gens et de Pokémon à mordre.',
			),
			array(
				'name' => 'Mystherbe',
				'number' => 43,
				'description' => 'Mystherbe cherche un sol fertile et riche en nutriments, pour s’y planter. Pendant la journée, quand il est planté, les pieds de ce Pokémon changent de forme et deviennent similaires à des racines.',
			),
			array(
				'name' => 'Ortide',
				'number' => 44,
				'description' => 'Ortide bave un miel qui sent horriblement mauvais. Apparemment, il adore cette odeur nauséabonde. Il en renifle les fumées toxiques et se met à baver du miel de plus belle.',
			),
            array(
		      	'name' => 'Rafflesia',
		      	'number' => 45,
		      	'description' => 'Rafflesia dispose des plus grands pétales du monde. Il s’en sert pour attirer ses proies avant de les endormir avec ses spores toxiques. Ce Pokémon n’a plus alors qu’à attraper sa proie et à la manger.',
		    ),
            array(
		      	'name' => 'Paras',
		      	'number' => 46,
		      	'description' => 'Paras a sur son dos deux champignons parasites, mais il ne semble pas en souffrir. Il arrive parfois d\'en croiser un avec trois champignons. Les scientifiques pensent que le champignon se transmet de génération en génération. Un Paras sans champignons sur son dos est destiné à mourir peu de temps après.',
		      	'type' => array (
		      		'Insecte',
		      		'Plante'
		      	)
		    ),                                       
            array(
		      	'name' => 'Parasect',
		      	'number' => 47,
		      	'description' => 'A cause de son apparence, Parasect semble être mi-champignon, mi-Pokémon. Les scientifiques ont longtemps pensé que les deux organismes luttaient sans arrêt l\'un contre l\'autre, mais en réalité c\'est une sorte d\'alliance : Parasect fournit des nutriments au champignon, en échange, le végétal lui fournit toute une palette de poudres agressives. ',
		      	'type' => array (
		      		'Insecte',
		      		'Plante'
		      	)
		    ), 
            array(
		      	'name' => 'Mimitoss',
		      	'number' => 48,
		      	'description' => 'Mimitoss ressemble à une boule de poils avec des antennes. Il a de petites dents et des yeux rouges. Ces-derniers sont identiques aux yeux d\'une mouche. ',
		      	'type' => array (
		      		'Insecte',
		      		'Poison'
		      	)
		    ),
            array(
		      	'name' => 'Aeromite',
		      	'number' => 49,
		      	'description' => 'Aéromite affectionne particulièrement les forêts, qu\'elles soient tempérées, tropicales ou marécageuses. Lorsqu\'il vole, une poudre toxique invisible tombe de ses ailes. Ce Pokémon est hautement toxique, car il combine de la Poudre toxik avec une attaque Tornade, ce qui a pour effet de la propager partout. ',
		      	'type' => array (
		      		'Insecte',
		      		'Poison'
		      	)
		    ),
            array(
		      	'name' => 'Taupiqueur',
		      	'number' => 50,
		      	'description' => 'Les Taupiqueur sont des créatures petites qui bougent en creusant dans le sol. Ils sont affaiblis par la lumière du soleil en raison de leur peau très fine et vivent sous terre, généralement à 1 mètre de profondeur ou dans des grottes, pour s\'en protéger. Là où ils creusent, la terre est plus fertile car elle est labourée. Ils se nourrissent de racines de plantes et ils remontent rarement à la surface. Leur tête sort approximativement de 20 cm au-dessus du sol. Toutefois, leur véritable taille reste à ce jour un mystère.',
		      	'type' => array (
		      		'Sol'
		      	)
		    ),            
		    array(
		      	'name' => 'Triopikeur',
		      	'number' => 51,
		      	'description' => 'Évolution de Taupiqueur, Triopikeur est une association de trois Taupiqueur. Ils creusent beaucoup plus rapidement, et peuvent parfois, s\'ils sont courroucés, lancer un puissant séisme2. Chacun pense exactement comme les deux autres, chaque tête creusant le sol à tour de rôle dans une coopération parfaite et inlassable. Il peut atteindre des profondeurs de 100 kilomètres.',
		      	'type' => array (
		      		'Sol'
		      	)
		    ),
		    array(
		      	'name' => 'Miaouss',
		      	'number' => 52,
		      	'description' => 'Miaouss est un Pokémon qui préfère largement vivre dans les villes plutôt que dans la nature. Il fouille les poubelles et se nourrit des déchets qu\'il y trouve. Apprivoisé, il passe son temps sur les genoux de son maître à se faire caresser. Beaucoup essayent de le forcer à utiliser son attaque Jackpot, mais Miaouss est trop rusé pour accepter. ',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Persian',
		      	'number' => 53,
		      	'description' => 'Un Persian apprivoisé a le même caractère que son maître. Si celui-ci est mauvais, le Pokémon devient vite arrogant et agressif, sauf avec lui. Sauvage, il se tapit dans les hautes herbes et bondit brusquement, toutes griffes sorties, sur la malheureuse proie. Ses griffes acérées ne laissent aucune chance à la victime. ',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Psykokwak',
		      	'number' => 54,
		      	'description' => 'Psykokwak est un étrange Pokémon mi-aquatique, mi-psy. Ce pauvre Pokémon a la migraine en permanence, et quand celle-ci atteint son paroxysme, il utilise de puissants pouvoirs psy sans s\'en rendre compte. Il maîtrise alors l\'attaque Choc mental avec perfection. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Akwakwak',
		      	'number' => 55,
		      	'description' => 'Akwakwak est un excellent nageur, qui aime s\'entraîner à nager contre les courants marins pour se muscler. La perle sur son front lui prodigue de puissants pouvoirs psy, et les griffes au bout de ses pattes sont acérées. Beaucoup de dresseurs de Pokémons aquatiques aimeraient en posséder un.  ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Férosinge',
		      	'number' => 56,
		      	'description' => 'Ferosinge est un Pokémon hyperactif qui ne dort pratiquement pas. Il se balance rapidement d\'arbre en arbre, et la moindre chose peut le mettre en colère. Quand il se bat, en général il ne compte pas sur sa puissance mais sur son agilité, et décoche rapidement des coups de griffe dans le dos de son ennemi.',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Colossinge',
		      	'number' => 57,
		      	'description' => 'Colosinge a un épouvantable caractère. Il n\'existe pas un seul Colossinge pacifique. Quand ce Pokémon se met en rogne contre quelqu\'un, cela devient son obsession, il en oublie même de manger ou de boire et ne pense qu\'à le frapper. Quand il est « relativement » calme, il s\'entraîne en frappant dans des arbres ou des rochers. ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Caninos',
		      	'number' => 58,
		      	'description' => 'Caninos est très fidèle. Loyal, il préfère se sauver plutôt que d\'attaquer son maître si celui-ci est injuste envers lui. Ce Pokémon est très apprécié car il est difficile de trouver plus affectueux et plus protecteur que lui. Il aime beaucoup jouer, c\'est pour cela que c\'est un grand ami des enfants. ',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Arcanin',
		      	'number' => 59,
		      	'description' => 'Arcanin fait partie des légendes Chinoises. Il a longtemps été considéré comme légendaire, car on pensait qu\'il courait avec le vent. Sous ses aspects terrifiants, il est doux et fidèle, et les dresseurs s\'en servent comme monture. Quand il combat, il crache des flammes impressionnantes. ',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Ptitard',
		      	'number' => 60,
		      	'description' => ' Ptitard vit dans les lacs ou les étangs. Il peut nager à bonne vitesse car sa queue est une nageoire efficace mais par contre, il est beaucoup moins adroit sur terre car ses petites pattes n\'offrent pas un très bon équilibre. Une fine muqueuse lui entoure le corps, ce qui le rends très glissant. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Tetarte',
		      	'number' => 61,
		      	'description' => 'Quand la spirale sur le ventre de Tetarte commence à tourner, il ne faut surtout pas la regarder car sinon, on s\'endort immédiatement. Personne ne sait dans quelle sens elle tourne car tout le monde s\'endort avant d\'avoir vu. Il est relativement à l\'aise sur terre, mais son élément reste l\'eau.  ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Tartard',
		      	'number' => 62,
		      	'description' => 'Tartard défend férocement son territoire, ne laissant dépasser que ses deux yeux de la surface de l\'eau pour surveiller les alentours. Il utilise des attaques d\'eau, mais il fait aussi tâter de ses poings à ses ennemis. Plutôt trapu, il n\'est pas très rapide sur terre, mais une fois dans l\'eau, il se déplace très rapidement.',
		      	'type' => array (
		      		'Eau',
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Abra',
		      	'number' => 63,
		      	'description' => 'Abra dort dix-huit heures par jour, mais pourtant, même éveillé, ses yeux restent fermés. Des dresseurs d\'Abra affirment que les rares fois où ils ouvrent leurs yeux, ceux-ci sont entièrement rouges. Il peut sentir à n\'importe quel moment quand il est en danger, et se téléporte pour se mettre en lieu sûr. ',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Kadabra',
		      	'number' => 64,
		      	'description' => ' Kadabra émet en permanence une puissante onde psychique, et rester trop longtemps auprès de lui donne la migraine. Sa cuillère traduit ses ondes psychiques en puissantes attaques psy. Juste par la pensée, il peut soulever trois Ronflex en même temps.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Alakazam',
		      	'number' => 65,
		      	'description' => 'Alakazam est un Pokémon qui n\'aime pas l\'effort physique. Il utilise sa Télékinésie pour toutes ses actions : manger, amener un objet à lui… Les scientifiques on démontré que si Alakazam utilisait des cuillères à café plutôt que des cuillères à soupes, leur pouvoir était moins puissant. ',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Machoc',
		      	'number' => 66,
		      	'description' => 'En général utilisé pour les tâches physiques, on trouve souvent des Machoc sur les chantiers. Ils adorent tout ce qui est musculation, et travailler pour les hommes est comme un jeu pour eux. Il ont des muscles spéciaux qui empêchent les courbatures et les claquages musculaires. ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Machopeur',
		      	'number' => 67,
		      	'description' => 'Machopeur est si fort que, parfois il a du mal à contrôler ses muscles. C\'est pour ça que chaque Machopeur a une ceinture spéciale qui l\'aide à se contrôler. Ses muscles sont durs comme de la pierre : il ne le sentirait même pas si vous tapiez dessus avec un marteau. D\'un coup de poings, il peut briser un bloc d\'acier en deux.  ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Mackogneur',
		      	'number' => 68,
		      	'description' => 'Mackogneur a tellement besoin de détendre ses muscles qu\'il a tendance à taper d\'abord, et réfléchir ensuite. C\'est le Pokémon le plus fort qui existe à ce jour, soulever une maison ne lui fait pas peur. Mais il est incapable de passer une aiguille dans un fil car ses bras s\'emmêlent dès qu\'il doit faire un travail délicat. ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Chetiflor',
		      	'number' => 69,
		      	'description' => 'Les Chetiflor vivent en groupes dans la jungle, car il sont plutôt faible. Mais dès qu\'ils prennent confiance en eux et qu\'ils deviennent capables d\'utiliser l\'attaque Acide ou l\'attaque Fouet-liane, ils quittent leur clan. Ces Pokémons se nourrissent principalement d\'insectes volants qu\'ils piègent dans leur bouche.  ',
		      	'type' => array (
		      		'Plante',
		      		'Poison'
		      	)
		    ),
		    array(
		      	'name' => 'Boustiflor',
		      	'number' => 70,
		      	'description' => 'Boustiflor se pends à une branche, et attend tranquillement qu\'une proie passe pour lui cracher un jet d\'acide. Pour se déplacer, il utilise son Fouet-liane et s\'agrippe de branches en branches. Mais s\'il est en terrain découvert, il est contraint de bondir sur son ventre.  ',
		      	'type' => array (
		      		'Plante',
		      		'Poison'
		      	)
		    ),
		    array(
		      	'name' => 'Empiflor',
		      	'number' => 71,
		      	'description' => 'Empiflor vit en petit groupe familial, au plus profond de la jungle. Il se pend aux branches basses, à quelques centimètres du sol et attend que la malheureuse proie passe devant lui sans s\'en rendre compte pour la happer d\'un coup. Elle est ensuite lentement digérée dans sa poche ventrale.  ',
		      	'type' => array (
		      		'Plante',
		      		'Poison'
		      	)
		    ),
		    array(
		      	'name' => 'Tentacool',
		      	'number' => 72,
		      	'description' => 'Les Tentacool flottent en grands bancs à la surface de l\'eau. Ils vivent principalement au large, mais les vents forts peuvent les ramener près des côtes. Les deux grands globes rouges sur leur tête permettent d\'envoyer de puissants ultrasons, et leurs tentacules sont venimeux. ',
		      	'type' => array (
		      		'Eau',
		      		'Poison'
		      	)
		    ),
		    array(
		      	'name' => 'Tentacruel',
		      	'number' => 73,
		      	'description' => 'Un Tentacruel possède en moyenne quatre-vingt tentacules, tous très toxiques. Quand il se bat, il envoie de très puissants ultrasons, capables de rendre fou pour toute la vie. Il se sert habilement de ses tentacules pour attraper, pour trancher ou pour frapper. ',
		      	'type' => array (
		      		'Eau',
		      		'Poison'
		      	)
		    ),
		    array(
		      	'name' => 'Racaillou',
		      	'number' => 74,
		      	'description' => 'Racaillou sait parfaitement se confondre parmi les rochers, et si par malheur quelqu\'un lui shoote dedans, il est capable de lui briser les deux chevilles. Mais en général, il préfère prendre la fuite. Ses bras musclés lui permet d\'effectuer de puissantes attaques Jet-de-pierre. ',
		      	'type' => array (
		      		'Roche',
		      		'Sol'
		      	)
		    ),
		    array(
		      	'name' => 'Gravalanch',
		      	'number' => 75,
		      	'description' => 'Très imposant, un Gravalanch utilise alternativement ses quatre bras pour lancer des rochers à ses ennemis. S\'il donne des coups dans les parois de la grotte, c\'est qu\'il est en train d\'effectuer une attaque Eboulement. Il se nourrit exclusivement de cailloux, on a remarqué qu\'il affectionnait particulièrement ceux recouverts de mousse. ',
		      	'type' => array (
		      		'Roche',
		      		'Sol'
		      	)
		    ),
		    array(
		      	'name' => 'Grolem',
		      	'number' => 76,
		      	'description' => 'Grolem, trapu et lourd, a beaucoup de mal à se déplacer grâce à ses deux jambes. Il préfère bouger en roulant, c\'est pour ça que les cailloux qui constituent son corps sont plats. Il est beaucoup moins agile que ces précédentes évolutions, alors il se bat en provoquant des Séismes ou des Abysses.',
		      	'type' => array (
		      		'Roche',
		      		'Sol'
		      	)
		    ),
		    array(
		      	'name' => 'Ponyta',
		      	'number' => 77,
		      	'description' => 'Peu de temps après la naissance, Ponyta est capable de courir aussi vite que sa mère. Courir le rend heureux, sa crinière s\'embrase joyeusement quand il galope. Si son maître ne le fait pas suffisamment défouler, il dépérit rapidement. S\'il se fait agresser, les sabots de Ponyta peuvent fracasser le crâne de son adversaire. ',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Galopa',
		      	'number' => 78,
		      	'description' => 'Au galop, la vitesse maximale d\'un Galopa est de 240 km/h. S\'il est en confiance, sa crinière n\'est pas brûlante et il aime être monté. Il a sans cesse besoin de se prouver qu\'il est le plus rapide, c\'est pour cela qu\'il défie tout ce qui bouge dans une course, où il sort vainqueur à chaque fois. ',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Ramoloss',
		      	'number' => 79,
		      	'description' => 'Ramoloss peut passer une journée entière à se prélasser au soleil sans rien faire. Il n\'est pas très vif d\'esprit, et il a à chaque fois un temps de réaction pour comprendre ce qu\'on vient de lui dire, ou pour comprendre ce qu\'il vient de se passer. Il ressent la douleur seulement au bout de cinq secondes. ',
		      	'type' => array (
		      		'Eau',
		      		'Psy'
		      	)
		    ),	
		    array(
		      	'name' => 'Flagadoss',
		      	'number' => 80,
		      	'description' => 'Un Flagadoss ne peut apparaître que si un Kokyas mord la queue d\'un Ramoloss. Il développe alors plus largement ses pouvoirs psychiques, mais n\'en devient pas plus dégourdi pour autant. Son attaque Amnésie peut paraître inutile, mais elle le rend en réalité plus puissant en augmentant presque toutes ses capacités. ',
		      	'type' => array (
		      		'Eau',
		      		'Psy'
		      	)
		    ),	
		    array(
		      	'name' => 'Magnéti',
		      	'number' => 81,
		      	'description' => 'Magnéti est irrésistiblement attiré par toutes les sources de courant électrique. Quand il trouve un objet qui fonctionne à l\'électricité, il se colle dessus pour en absorber l\'énergie. Il lévite en envoyant un léger champs électrique. Ses attaques Tonnerre peuvent déclencher des crises d\'épilepsie. ',
		      	'type' => array (
		      		'Electrik',
		      		'Acier'
		      	)
		    ),	
		    array(
		      	'name' => 'Magneton',
		      	'number' => 82,
		      	'description' => 'Un Magnéton est une association de trois Magnéti, soudés par un puissant courant électrique. Leurs aimants attirent toute l\'électricité contenue dans l\'air. Magnéton est très excité les jours d\'orages, et il essaye à tout prix d\'attirer la foudre sur lui. Son attaque Cage-éclair paralyse à tous les coups son ennemi. ',
		      	'type' => array (
		      		'Electrik',
		      		'Acier'
		      	)
		    ),
		    array(
		      	'name' => 'Canarticho',
		      	'number' => 83,
		      	'description' => 'Canarticho ne se sépare jamais de son poireau car il lui sert à se défendre. Il le brandit habilement pour frapper, ou trancher. Les gens pensaient que ce poireau possédait des vertus particulières, mais c\'est juste un banal légume. C\'est un Pokémon solitaire. ',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Doduo',
		      	'number' => 84,
		      	'description' => 'Doduo est un Pokémon qui vit, à l\'état sauvage, dans les grandes plaines, où il peut courir à loisir. Ne pouvant pas voler, il a développé ses pattes pour échapper à ses ennemis. Ce Pokémon possède bien deux cerveaux, mais une seule tête est capable de contrôler le corps ; c\'est pour cela que la deuxième tête est toujours agressive. ',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),	
		    array(
		      	'name' => 'Dodrio',
		      	'number' => 85,
		      	'description' => 'Les trois têtes de Dodrio possèdent leur propre caractère. Les trois têtes ne dorment jamais en même temps, car elles se relaient pour monter la garde. ',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Otaria',
		      	'number' => 86,
		      	'description' => 'Otaria possède un épaisse couche de graisse qui le protège des eaux glacées. Son pelage blanc le confond parfaitement sur la neige, car il vit uniquement dans les climats glacés. Nager dans une eau dont la température descend en dessous de zéro ne lui fait pas peur. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),	
		    array(
		      	'name' => 'Lamantine',
		      	'number' => 87,
		      	'description' => 'Lamantine est si gracieux que, jadis, les marins le prenait pour une sirène. Pour se reposer, il se hisse sur les Icebergs, sa peau dure est fournie d\'une couche de graisse qui l\'isole parfaitement du froid. Il sait se déplacer sur terre, mais il est beaucoup plus à l\'aise dans l\'eau pour lancer ses Onde Boréales. ',
		      	'type' => array (
		      		'Eau',
		      		'Glace'
		      	)
		    ),	
		    array(
		      	'name' => 'Tadmorv',
		      	'number' => 88,
		      	'description' => 'Le liquide visqueux qui compose le corps de Tadmorv est si toxique, qu\'une fois qu\'il passe sur la terre, celle-ci devient infertile. Quelques gouttes tarissent un étang. Mais heureusement, il n\'aime pas tellement la vie sauvage et préfère vivre dans les grandes villes, où il s\'installe dans les égouts et les canalisations. ',
		      	'type' => array (
		      		'Poison',
		      	)
		    ),	
		    array(
		      	'name' => 'Grotadmorv',
		      	'number' => 89,
		      	'description' => 'Grotadmorv dégage une odeur particulièrement atroce. Il n\'est pas rare de voir parmi un groupe de Tadmorv un imposant Grotadmorv. Dans les égouts, il ne dérange personne mais s\'il vient s\'infiltrer dans les canalisations, il provoque un bouchon. Il se nourrit de fruits pourris et de cadavres en décomposition. ',
		      	'type' => array (
		      		'Poison',
		      	)
		    ),
		    array(
		      	'name' => 'Kokiyas',
		      	'number' => 90,
		      	'description' => 'Kokiyas est irrésistiblement attiré par la queue des Ramoloss. Dès qu\'il en voit une, il ne peut s\'empêcher de la mordre. S\'il est attaqué, il se réfugie dans sa coquille, ne l\'ouvrant que pour lancer des Pistolets à O. Sa langue analyse l\'environnement extérieur, il peut sentir la chaleur des autres Pokémons grâce à elle. ',
		      	'type' => array (
		      		'Eau',
		      	)
		    ),	
		    array(
		      	'name' => 'Crustabri',
		      	'number' => 91,
		      	'description' => 'Même si trois Nidoking piétinaient la coquille de Crustabri, elle ne céderait pas. Au combat, il la referme puissamment sur son ennemi, lui broyant les os. De nombreux plongeurs, dans l\'obscurité, se sont approchés de ce qu\'ils prenaient pour deux joyaux et sont morts brisés en deux en réalisant trop tard qu\'il s\'agissait des yeux d\'un Crustabri.',
		      	'type' => array (
		      		'Eau',
		      	)
		    ),
		    array(
		      	'name' => 'Fantominus',
		      	'number' => 92,
		      	'description' => 'Le corps de Fantominus n\'est pas solide, il est uniquement gazeux. Il adore se réfugier dans les maisons abandonnées, et effrayer les visiteurs occasionnels avec des hallucinations. Quand il fait une attaque Léchouille, sa langue se matérialise par un phénomène inconnu. Il est impossible à atteindre par des attaques physiques. ',
		      	'type' => array (
		      		'Spectre',
		      		'Poison'
		      	)
		    ),	
		    array(
		      	'name' => 'Spectrum',
		      	'number' => 93,
		      	'description' => 'Les Spectrum sauvages adorent effrayer les passants en faisant d\'horribles grimaces. Il est passé maître dans les attaques de type spectre, le rendant encore plus terrifiant. Apprivoisé, ce Pokémon est très fidèle et il ne perd pas une occasion de faire rire son dresseur. ',
		      	'type' => array (
		      		'Spectre',
		      		'Poison'
		      	)
		    ), 
		    array(
		      	'name' => 'Ectoplasma',
		      	'number' => 94,
		      	'description' => 'Beaucoup de gens ont peur d\'Ectoplasma. Même avec un dresseur, il a tendance à garder un côté sombre et terrifiant. Dans le noir, ce Pokémon se téléporte sans cesse pour faire peur à son ennemi, ses deux yeux rouges brillants comme des lumières. Il l\'endort ensuite et dévore ses rêves les plus terrifiants. ',
		      	'type' => array (
		      		'Spectre',
		      		'Poison'
		      	)
		    ),  
		    array(
		      	'name' => 'Onix',
		      	'number' => 95,
		      	'description' => 'Onix vit sous terre, en creusant à parfois 90 km/h. Son terrain de prédilection est la montagne, lui permettant d\'exposer sa large gamme d\'attaques de type sol et roche. Il vit en général loin des villages, mais un de ces Pokémon déclenche à chaque fois un cri d\'admiration lorsqu\'il est aperçu à l\'état sauvage. ',
		      	'type' => array (
		      		'Roche',
		      		'Sol'
		      	)
		    ), 
		    array(
		      	'name' => 'Soporifik',
		      	'number' => 96,
		      	'description' => 'Soporifik a une mauvaise manie, qu\'il ne perd jamais même apprivoisé : il mange les rêves des hommes, il ne peut pas s\'en empêcher. S\'il mange un cauchemar, il tombe malade. Quand il a faim, il n\'attend pas de trouver une victime endormie : il s\'en charge lui même en l\'hypnotisant. ',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),  
		    array(
		      	'name' => 'Hypnomade',
		      	'number' => 97,
		      	'description' => 'Hypnomade utilise son pendule pour hypnotiser ses adversaires. Une fois endormis, ceux-ci ne réalisent pas qu\'Hypnomade les soulèvent par la force de la pensée. Ils ne se réveillent que quand ils s\'écrasent contre un rocher. Quand ce Pokémon se concentre, il déclenche des maux de tête chez leur dresseur. ',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Krabby',
		      	'number' => 98,
		      	'description' => 'Les Krabby vivent sur les berges des lacs, et sur les plages. Ils ne peuvent pas s\'empêcher de faire des bulles. Krabby paraît faible, mais ses pinces peuvent briser un rocher en mille morceaux. Ce Pokémon est incapable de se déplacer vers l\'avant : il ne sait marcher que latéralement. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),  
		    array(
		      	'name' => 'Krabboss',
		      	'number' => 99,
		      	'description' => 'Si une pince de Kraboss est coupée ou arrachée, celle-ci repousse plus grosse que la précédente. De mauvais dresseurs leur ont déjà coupé la pince pour que celle-ci devienne plus puissante. S\'il attrape sa proie, celle-ci est perdue : il la brise en deux en un instant. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Voltorbe',
		      	'number' => 100,
		      	'description' => ' La première fois qu\'on a aperçu Voltorbe, c\'était dans une usine de Pokéballs. Personne ne sait comment il est apparu sur terre. Il se déplace en roulant, en envoyant sans faire exprès quelques étincelles. Cette simili pokéball se défend grâce à des attaques Tonnerre et Grincement. ',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ), 
		    array(
		      	'name' => 'Electrode',
		      	'number' => 101,
		      	'description' => 'Electrode se nourrit exclusivement de l\'électricité qui se trouve dans notre athmosphère. Il la stocke ensuite dans son corps sous une pression incroyable : il suffit qu\'il augmente encore plus la pression de son corps pour qu\'il explose. Les jours d\'orage, il explose sans arrêt car il mange trop d\'électricité. ',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),  
		    array(
		      	'name' => 'Noeunoeuf',
		      	'number' => 102,
		      	'description' => 'Un groupe de Noeunoeuf est toujours constitué de six membres solidaires, attirés entre eux comme des aimants. Si l\'un d\'entre eux se perd, ils utilisent leur énergie télépathique pour se retrouver. Comme ils n\'ont pas de jambes, il se déplacent en petits bonds organisés. La coquille fendue indique la prochaine évolution. ',
		      	'type' => array (
		      		'Plante',
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Noadkoko',
		      	'number' => 103,
		      	'description' => 'Les Noadkokos vivent dans la jungle en bande. Leurs têtes sont chacune particulière, toutes ont leur propre sentiment. Quand l\'une d\'elle tombe, elle se transforme en Noeunoeuf et part immédiatement à la recherche d\'un groupe. Ce Pokémon utilise sa télépathie pour communiquer.  ',
		      	'type' => array (
		      		'Plante',
		      		'Psy'
		      	)
		    ), 
		    array(
		      	'name' => 'Osselait',
		      	'number' => 104,
		      	'description' => 'Osselait porte toujours son casque en os sur la tête. Personne n\'a jamais vu ce Pokémon sans. Il fouille parmi les carcasses pour trouver un os, qu\'il utilisera comme massue. Il est très sensible, et se met à pleurer s\'il a faim, froid, soif ou peur mais quand il se bat, il peut être redoutable. ',
		      	'type' => array (
		      		'Sol'
		      	)
		    ),  
		    array(
		      	'name' => 'Ossatueur',
		      	'number' => 105,
		      	'description' => 'Ossatueur sait se servir de sa massue en os d\'une manière remarquable. Jadis, ces Pokémons étaient faibles mais depuis qu\'ils ont appris à manier les os, ils sont devenus craints par les autres Pokémon. Ossatueur peut l\'utiliser pour assommer ses ennemis, mais il peut aussi lancer son os comme un boomerang. ',
		      	'type' => array (
		      		'Sol'
		      	)
		    ),
		    array(
		      	'name' => 'Kicklee',
		      	'number' => 106,
		      	'description' => 'Les jambes de Kicklee peuvent s\'allonger et se rétracter à volonté, comme des élastiques. C\'est un pro des arts martiaux, mais il se bat uniquement avec ses jambes. Seul, il s\'entraîne constamment à diverses attaques de type combat : Mawashi-guéri, Pied sauté ou Pied voltige. ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ), 
		    array(
		      	'name' => 'Tygnon',
		      	'number' => 107,
		      	'description' => 'Tygnon aime taper avec ses poings. Il est très rapide, décochant à ses ennemis des coups fulgurants. S\'il s\'entraîne suffisamment, il peut maîtriser trois éléments, le rendant alors difficile à battre : Poing feu, Poing foudre et Poing glace. Son jeu de jambe lui permet d\'esquiver les coups. ',
		      	'type' => array (
		      		'Combat'
		      	)
		    ),
		    array(
		      	'name' => 'Excelangue',
		      	'number' => 108,
		      	'description' => 'La langue d\'Excelangue fait deux fois la taille de son corps. Ce Pokémon est un véritable glouton, il mange tout ce qu\'il voit, l\'attrapant en déroulant son immense langue. Il enregistre le goût dans sa mémoire, qu\'il n\'oublie jamais. Il produit une salive spéciale, qui paralyse tout ceux qui entrent en contact avec elle. ',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Smogo',
		      	'number' => 109,
		      	'description' => 'Le corps de Smogo est principalement constitué de gaz toxiques. En respirer en petite quantité provoque des irritations et des reniflements mais une trop grosse dose peut s\'avérer mortelle. Il ne faut surtout pas l\'emmener dans un endroit chaud car sinon, il explose. ',
		      	'type' => array (
		      		'Poison'
		      	)
		    ), 
		    array(
		      	'name' => 'Smogogo',
		      	'number' => 110,
		      	'description' => 'Smogogo rôde près des poubelles pour aspirer les gaz d\'aliments pourris qui s\'en dégage, et sentir encore plus mauvais. Ce Pokémon est une association de deux Smogo ; si l\'une des têtes se gonfle, l\'autre se dégonfle. Ils mélangent en permanence leurs gaz mortels. ',
		      	'type' => array (
		      		'Poison'
		      	)
		    ),  
		    array(
		      	'name' => 'Rhinocorne',
		      	'number' => 111,
		      	'description' => 'Rhinocorne est un Pokémon très fort, mais pas très intelligent. Son petit cerveau ne peut penser qu\'à une seule chose à la fois. S\'il se met à charger, et qu\'il est distrait par quelque chose, il ne sait même plus pourquoi il attaque. Sa peau en pierre lui confère une immunité à toutes les attaques physiques. ',
		      	'type' => array (
		      		'Sol',
		      		'Roche'
		      	)
		    ), 
		    array(
		      	'name' => 'Rhinoféros',
		      	'number' => 112,
		      	'description' => ' Rhinoféros acquiert plus d\'intelligence à l\'évolution. Sa peau est encore plus dure que de la pierre, un boulet de canon ne lui ferait même pas une égratignure, et il peut même prendre un bain de lave si ça lui chante. La corne sur le nez de Rhinoféros peut tourner très rapidement, il s\'en sert pour forer les montagnes. ',
		      	'type' => array (
		      		'Sol',
		      		'Roche'
		      	)
		    ), 
		    array(
		      	'name' => 'Leveinard',
		      	'number' => 113,
		      	'description' => ' A l\'état sauvage, les Leveinard sont très rares et très farouches. Mais certaines personnes, il y a longtemps, ont réussi à les apprivoiser et depuis, on en trouve dans tous les centres Pokémon. Leurs œufs sont très nourrissants, c\'est un remède très connu pour soigner les maladies ou reprendre rapidement des forces. ',
		      	'type' => array (
		      		'Normal'
		      	)
		    ), 
		    array(
		      	'name' => 'Saquedeneu',
		      	'number' => 114,
		      	'description' => 'Le corps de Saquedeneu est recouvert par une épaisse masse de lianes bleues qui poussent en permanence. Elles sont très fragiles : si on tire trop fort dessus, elles cassent. Mais cela ne dérange pas Saquedeneu vu que ses lianes repoussent instantanément. En combat, il peut libérer des poudres toxiques. ',
		      	'type' => array (
		      		'Plante'
		      	)
		    ), 
		    array(
		      	'name' => 'Kangourex',
		      	'number' => 115,
		      	'description' => 'Kangourex est un des Pokémon les plus maternel. Il élève son petit dans sa poche ventrale, sous constante surveillance. Lorsqu\'on rencontre un bébé Kangourex qui joue tout seul, il est vivement conseillé de faire demi-tour car la mère est souvent tapie dans l\'ombre pour surveiller son petit. ',
		      	'type' => array (
		      		'Normal'
		      	)
		    ), 
		    array(
		      	'name' => 'Hypotrempe',
		      	'number' => 116,
		      	'description' => 'Hipotrempe résiste aux forts courants marins en s\'accrochant aux coraux ou aux pierres grâce à sa queue. Il se nourrit de mousse, mais son repas préféré reste les insectes volant. Il sort sa tête de l\'eau, et attends qu\'il passe un insecte pour lui cracher un jet d\'encre.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),  
		    array(
		      	'name' => 'Hypocean',
		      	'number' => 117,
		      	'description' => 'Les aiguillons sur le dos d\'Hypocéan sont empoisonnés. S\'il est dérangé, il crache un jet d\'encre pour s\'enfuir mais si l\'agresseur persiste, il lui envoie une rafale de piquants venimeux. Pour dormir, il s\'ancre solidement aux rochers avec sa queue en spirale. ',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),   
		    array(
		      	'name' => 'Poissirène',
		      	'number' => 118,
		      	'description' => 'Poissirène est un magnifique Pokémon doté de nageoires qui ondulent avec grâce dans le courant. Il à longtemps été considéré comme le symbole de la grâce et de la beauté. Cependant il peut être un adversaire redoutable car quand il charge, sa corne est dirigée vers l\'avant pour faire front.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Poissoroy',
		      	'number' => 119,
		      	'description' => 'L\'automne est la saison nuptiale des Poissoroy. On peut les voir en grand groupes dans les rivières pour essayer de plaire aux femelles. C\'est pendant cette saison que ses nageoires prennent les plus belles couleurs. Il défend sa femelle avec fougue, en lançant des attaques Empal\'corne ou Coud\'korne.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),  
		    array(
		      	'name' => 'Stari',
		      	'number' => 120,
		      	'description' => 'Stari est un étrange Pokémon, constitué d\'un seul organe principal : un magnifique joyau qui brille de mille feux, le cœur. Ces mystérieuses créatures ont le pouvoir de se régénérer entièrement, tant que le cœur est intact : si une de ses pattes tombe, elle est immédiatement reformée.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),    
		    array(
		      	'name' => 'Staross',
		      	'number' => 121,
		      	'description' => 'Le cœur de Stari a évolué pour donner un joyaux encore plus resplendissant et un nouveau pokémon : Staross. Son joyaux brille de différentes couleurs en fonction de la lumière, de l\'angle de vue et de l\'humeur du Pokémon. Si celui-ci est brisé durant un combat, il meurt.',
		      	'type' => array (
		      		'Eau',
		      		'Psy'
		      	)
		    ),  
		    array(
		      	'name' => 'M.Mime',
		      	'number' => 122,
		      	'description' => 'Mr mime est passionné par le fait d\'imiter des choses invisibles. Ses doigts produisent une onde chimique qui rend l\'air palpable, et avec le temps et l\'expérience, il peut devenir capable de créer de véritables objets. Ne le dérangez jamais en train de mimer, car sinon il vous punira avec une volée de claques.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Insécateur',
		      	'number' => 123,
		      	'description' => 'Insecateur possède deux armes meurtrières : sa vitesse combinée avec l\'utilisation de ses lames. Les petites ailes sur son dos sont incapables de le faire voler sur une longue distance, mais elles lui donnent une vitesse si impressionnante que lorsqu\'il il se déplace, il donne l\'illusion d\'être en groupe. Ses lames couperaient un tronc d\'arbre d\'un seul coup.',
		      	'type' => array (
		      		'Insecte',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Lippoutou',
		      	'number' => 124,
		      	'description' => 'Lippoutou est un étrange Pokémon humanoïde, qui se déhanche de droite à gauche d\'une drôle de façon en marchant. Les gens qui le croisent sont soudains pris d\'une envie de se déhancher comme lui, c\'est un phénomène inexpliqué. Il aime par dessus tout embrasser les gens, mais s\'il le souhaite, il peut les paralyser ainsi.',
		      	'type' => array (
		      		'Glace',
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Elektek',
		      	'number' => 125,
		      	'description' => 'Comme beaucoup de Pokémons Electriks, Elektek se regroupe sur les hauteurs en cas d\'orages. C\'est un combattant qui fait sortir l\'électricité par ses deux antennes placées sur son front. En faisant parcourir ainsi le courant sur son corps, il devient impossible à toucher physiquement, sous peine d\'électrocution.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(
		      	'name' => 'Magmar',
		      	'number' => 126,
		      	'description' => 'Dans les volcans en activités, vous pourriez trouver des Magmar en train de prendre un bain de lave. Ces Pokémons sont totalement insensibles à la chaleur, puisque leur corps est en constante fusion. Il suffit qu\'un combat démarre pour que son corps s\'embrase violemment.',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Scarabrute',
		      	'number' => 127,
		      	'description' => 'La pince située sur la tête de Scarabrute est incroyablement puissante. Il peut exercer une pression de plusieurs tonnes avec, mais il est beaucoup plus faible pour l\'ouvrir. Au cas où il ne parviendrais pas à écraser sa proie, il la secoue méchamment et la jette dans les airs.',
		      	'type' => array (
		      		'Insecte'
		      	)
		    ),
		    array(
		      	'name' => 'Tauros',
		      	'number' => 128,
		      	'description' => 'Souvent utilisé pour les travaux manuels, comme tirer des charrues, Tauros est pourtant un Pokémon très excité. Il a parfois besoin de tout saccager sur son passage pour se calmer. Les Tauros se battent violemment entre eux pour désigner le mâle dominant du troupeau.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Magicarpe',
		      	'number' => 129,
		      	'description' => 'On raconte qu\'autrefois, Magicarpe était beaucoup plus puissant qu\'aujourd\'hui. Il ne sait faire que des ronds et des bonds dans l\'eau. Il est malheureusement devenu célèbre pour son inutilité…cet étrange Pokémon a poussé de nombreux chercheurs a étudier son cas, mais aucune théorie plausible n\'a été avancée.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Leviator',
		      	'number' => 130,
		      	'description' => 'Terrifiant et puissant, Leviator peut rentrer dans des aspects de rage terrifiant : raser une ville entière ne lui fait pas peur, et de nombreux récit historiques racontent que pendant les guerres, il apparaissait et rasait des régions entières.. Personne ne sait expliquer comment un ridicule Magicarpe peut se transformer en un monstre si terrible.',
		      	'type' => array (
		      		'Eau',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Lokhlass',
		      	'number' => 131,
		      	'description' => 'Magnifique pokémon, Lokhlass est pourtant en voie d\'extinction. D\'une nature gentille et généreuse, il transporte les gens par delà les océans. S\'il est de bonne humeur, Lokhlass chantonne gaiement une agréable mélodie aiguë. Le soir par contre, sa mélodie est beaucoup plus triste : il appelle ses rares congénères.',
		      	'type' => array (
		      		'Eau',
		      		'Glace'
		      	)
		    ),
		    array(
		      	'name' => 'Metamorph',
		      	'number' => 132,
		      	'description' => 'Métamorph a une structure moléculaire surprenante : ce Pokémon sait la modifier pour se transformer en n\'importe quoi. Comparez un véritable Pokémon à sa copie, et vous verrez qu\'il est exactement pareil. Il se trompe parfois s\'il se transforme de mémoire. Si vous faites rire un Métamorph, il ne pourra pas rester déguisé.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Evoli',
		      	'number' => 133,
		      	'description' => 'Evoli est un Pokémon étrange, car il évolue en 7 formes différentes selon les conditions. Sa structure moléculaire instable le fait évoluer dès qu\'il rencontre un objet attribué à un environnement particulier. Très attachant, beaucoup de foyers l\'apprécient comme animal de compagnie mais il devient de plus en plus rare à l\'état sauvage.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Aquali',
		      	'number' => 134,
		      	'description' => 'Des nageoires et des branchies sont apparues sur le corps d\'Aquali, lui permettant de vivre dans les fonds marins. Il est étroitement lié avec l\'eau, car sa structure moléculaire en est proche. S\'il va se mettre à pleuvoir, ses nageoires frémissent doucement. En se concentrant, il peut manipuler l\'eau à volonté.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Voltali',
		      	'number' => 135,
		      	'description' => 'Si vous vous approchez de près d\'un Voltali, vous pourrez entendre le bruit du courant électrique passant dans sa fourrure électrisée. Capable de créer un formidable courant grâce à ses poils, on peut voir qu\'il est prêt à attaquer quand ceux-ci sont tous hérissés. Sa fourrure fait aussi office d\'aiguillons prêts à être projetés.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(
		      	'name' => 'Pyroli',
		      	'number' => 136,
		      	'description' => 'Pyroli utilise sa fourrure pour faire baisser sa chaleur interne, qui peut atteindre les 900 degrés. Mais s\'il est excité ou énervé, il avoisine facilement les 1600 degrés. Cracher trop de flammes peut lui être dangereux, car si sa température baisse trop, il meurt. Ses poils ne s\'emmêlent jamais car la chaleur les rend lisse.',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(
		      	'name' => 'Porygon',
		      	'number' => 137,
		      	'description' => 'Pokémon artificiel, Porygon est un des Pokémons les plus rares. Comme il ne respire pas, ne mange pas, ne boit pas, il peut survivre n\'importe où, y compris dans l\'espace. Il se décompile pour rentrer à l\'état de programme dans le cyber-espace. Des internautes affirment avoir vu ce Pokémon un instant dans leurs fichiers, puis disparaître.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Amonita',
		      	'number' => 138,
		      	'description' => 'Pokémon artificiel, Porygon est un des Pokémons les plus rares. Comme il ne respire pas, ne mange pas, ne boit pas, il peut survivre n\'importe où, y compris dans l\'espace. Il se décompile pour rentrer à l\'état de programme dans le cyber-espace. Des internautes affirment avoir vu ce Pokémon un instant dans leurs fichiers, puis disparaître.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Amonistar',
		      	'number' => 139,
		      	'description' => 'Le dernier Amonita est mort il y a des millions d\'années. D\'après l\'étude de ses fossiles, il avait exactement dix tentacules, qu\'il utilisait tantôt pour nager, tantôt pour attraper le plancton dont il se nourrissait. Amonita gérait l\'air de sa coquille pour couler ou faire surface.',
		      	'type' => array (
		      		'Roche',
		      		'Eau'
		      	)
		    ),		    
		    array(
		      	'name' => 'Amonistar',
		      	'number' => 140,
		      	'description' => 'Vivant à la même époque qu\'Amonita, on a longtemps cru que Kabuto avait disparu jusqu\'à ce que l\'on retrouve un spécimen vivant. Quand il est caché au fond de l\'eau, il utilise les yeux sur son dos pour voir ce qu\'il l\'entoure. Ses petites pattes sont très pratiques pour arpenter le fond marin.',
		      	'type' => array (
		      		'Roche',
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Kabuto',
		      	'number' => 141,
		      	'description' => 'Kabutops était un excellent nageur. Dans l\'eau, il se recroquevillait sur ses jambes et il agitait sa coquille pour nager à très grande vitesse. Ses longues griffes acérées se sont mutées en lames tranchantes, qu\'il utilise pour découper ses proies. Certains scientifiques pensent qu\'il est l\'ancêtre d\'Insecateur.',
		      	'type' => array (
		      		'Roche',
		      		'Eau'
		      	)
		    ),
		    array(
		      	'name' => 'Ptera',
		      	'number' => 142,
		      	'description' => 'Ptéra était le roi des cieux à l\'époque préhistorique, mais il a aujourd\'hui disparu. On sait qu\'il employait sa gueule garnie de crocs pour égorger ses victimes. Il arpentait les cieux préhistoriques en étirant ses longues ailes, en se laissant porter par les courant chauds. On pense qu\'il était d\'une nature très agressive.',
		      	'type' => array (
		      		'Roche',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Ronflex',
		      	'number' => 143,
		      	'description' => 'Ronflex est un Pokémon très pacifique, mais très paresseux aussi. Ses principales préoccupations de la journée sont dormir et manger. Son incroyable estomac est capable de digérer n\'importe quoi, même le plus mortel des poisons. Ce Pokémon préfère faire la sieste plutôt que de se battre.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(
		      	'name' => 'Artikodin',
		      	'number' => 144,
		      	'description' => 'Artikodin est l\'oiseau légendaire qui contrôle la glace éternelle. Quand il vole, il givre l\'air et l\'eau tout autour de lui, ce qui crée une légère neige poudreuse dans son sillage. Ce Pokémon vole gracieusement, en ondulant délicatement sa longue et magnifique queue derrière lui.',
		      	'type' => array (
		      		'Glace',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Electhor',
		      	'number' => 145,
		      	'description' => 'Electhor est l\'oiseau légendaire de la foudre. Il est très impressionnant de le voir voler car il est suivi par d\'immenses nuages noirs. La plupart du temps, il se cache dedans et déclenche de violents orages. S\'il vole à découvert, vous pourrez voir des étincelles jaillir de ses ailes électrisées.',
		      	'type' => array (
		      		'Electrik',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Sulfura',
		      	'number' => 146,
		      	'description' => 'Etroitement lié aux volcans, Sulfura est l\'oiseau légendaire du feu. On raconte qu\'il aide les voyageurs égarés dans la montagne. Ses ailes en feu s\'embrasent quand il bat des ailes. Si dans la nuit vous apercevez une boule de feu voler à toute allure, il s\'agit de l\'oiseau légendaire du feu.',
		      	'type' => array (
		      		'Feu',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Minidraco',
		      	'number' => 147,
		      	'description' => 'Pendant ses nombreuses périodes de mue, Minidraco est fragile. Il se cache derrière les cascades pour se protéger. Longtemps considéré comme légendaire, une colonie a pourtant été découverte dans les océans par un pêcheur. Rare malgré tout, il est férocement protégé par les autorités.',
		      	'type' => array (
		      		'Dragon'
		      	)
		    ),
		    array(
		      	'name' => 'Draco',
		      	'number' => 148,
		      	'description' => 'Draco est un Pokémon mythique, qui emmagasine le plus d\'énergie possible. En déchargeant celle-ci dans ses cristaux, il est capable de faire varier le climat. Il est entouré d\'une aura blanche quand la météo change. Solitaire, c\'est un Pokémon farouche : peu de gens l\'ont déjà vu sauvage.',
		      	'type' => array (
		      		'Dragon'
		      	)
		    ),
		    array(
		      	'name' => 'Dracolosse',
		      	'number' => 149,
		      	'description' => 'Certains pêcheurs affirment s\'être fait sauver de la noyade par un Dracolosse sauvage. C\'est un Pokémon marin extrêmement rare au grand cœur. Sa carrure impressionnante le met à l\'abri de toute attaque. Déchaîner sa colère serait la pire chose à faire, car malgré son tempérament pacifique, il maîtrise des attaques dévastatrices comme Colère.',
		      	'type' => array (
		      		'Dragon',
		      		'Vol'
		      	)
		    ),
		    array(
		      	'name' => 'Mewtwo',
		      	'number' => 150,
		      	'description' => 'Mewtwo est un terrible Pokémon qui vient d\'expériences génétiques horribles et malsaines. Créé pour le combat, il ne connaît ni la pitié, ni la défaite. Ses puissants pouvoirs psychiques peuvent aller jusqu\'à déclencher des variations météorologiques partout dans le monde. Il est unique.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(
		      	'name' => 'Mew',
		      	'number' => 151,
		      	'description' => 'On sait très peu de choses sur Mew. Il est dit qu\'autrefois, ils étaient nombreux, mais ils auraient tous disparus sauf 1. Ce Pokémon mythique peut apprendre toutes les capacités, c\'est pour cela que certains pensent qu\'il est l\'ancêtre de tous les Pokémon. Pacifique, il passe son temps à jouer et à s\'amuser.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
	   );

	    /* Insertion en base */
	    $i = 1;
	    foreach ($pokemons as $pokemon) {
			$addPokemon = new Pokemon();
			$addPokemon->setName($pokemon['name']);
			$addPokemon->setNumber($pokemon['number']);
			$addPokemon->setDescription($pokemon['description']);
			$addPokemon->setGeneration($i);

			if(isset($pokemon['type'])){
				foreach ($pokemon['type'] as $type){
					$addPokemon->addPokemonType($this->getReference('type_'.$type));
				}
			}

			$manager->persist($addPokemon);
		}

	    $manager->flush();
	}

    public function getDependencies()
    {
        return array(
            LoadPokemonTypeData::class,
        );
    }
}