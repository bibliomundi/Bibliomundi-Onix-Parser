<?php

namespace BBM\model;

class ProductEnum
{
	public static $operationType;
	public static $contributorsType;
	public static $productFormDetail; 
	public static $epubTechnicalProtection;
	public static $sizeUnit; 
	public static $ageRatingClassification;
	public static $formatFile;		
    public static $languageRoleDescription;	
	public static $bisac;
	public static $cdd;

    public static function init()
    {
        $aux = <<<EOF
[
{
    "code" : "ANT000000",
    "description_ptbr" : "GERAL",
    "description_en" : "ANTIQUES & COLLECTIBLES / General"
},
{
    "code" : "ANT001000",
    "description_ptbr" : "RELACIONADOS AOS ESTADOS UNIDOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Americana"
},
{
    "code" : "ANT002000",
    "description_ptbr" : "ARTE",
    "description_en" : "ANTIQUES & COLLECTIBLES / Art"
},
{
    "code" : "ANT003000",
    "description_ptbr" : "AUTÓGRAFOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Autographs"
},
{
    "code" : "ANT005000",
    "description_ptbr" : "LIVROS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Books"
},
{
    "code" : "ANT006000",
    "description_ptbr" : "GARRAFAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Bottles"
},
{
    "code" : "ANT007000",
    "description_ptbr" : "BROCHES E ALFINETES",
    "description_en" : "ANTIQUES & COLLECTIBLES / Buttons & Pins"
},
{
    "code" : "ANT008000",
    "description_ptbr" : "CUIDADO E RESTAURAÇÃO",
    "description_en" : "ANTIQUES & COLLECTIBLES / Care & Restoration"
},
{
    "code" : "ANT009000",
    "description_ptbr" : "TRANSPORTES",
    "description_en" : "ANTIQUES & COLLECTIBLES / Transportation"
},
{
    "code" : "ANT010000",
    "description_ptbr" : "RELÓGIOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Clocks & Watches"
},
{
    "code" : "ANT011000",
    "description_ptbr" : "MOEDAS, DINHEIRO & MEDALHAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Coins, Currency & Medals"
},
{
    "code" : "ANT012000",
    "description_ptbr" : "HISTÓRIAS EM QUADRINHOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Comics"
},
{
    "code" : "ANT015000",
    "description_ptbr" : "BONECAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Dolls"
},
{
    "code" : "ANT016000",
    "description_ptbr" : "ARMAS DE FOGO E ARMAMENTOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Firearms & Weapons"
},
{
    "code" : "ANT017000",
    "description_ptbr" : "MOBÍLIA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Furniture"
},
{
    "code" : "ANT018000",
    "description_ptbr" : "VIDRO E VIDRARIA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Glass & Glassware"
},
{
    "code" : "ANT021000",
    "description_ptbr" : "JOIAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Jewelry"
},
{
    "code" : "ANT022000",
    "description_ptbr" : "UTENSÍLIOS DE COZINHA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Kitchenware"
},
{
    "code" : "ANT023000",
    "description_ptbr" : "REVISTAS E JORNAIS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Magazines & Newspapers"
},
{
    "code" : "ANT024000",
    "description_ptbr" : "MILITAR",
    "description_en" : "ANTIQUES & COLLECTIBLES / Military"
},
{
    "code" : "ANT025000",
    "description_ptbr" : "ARTES PERFORMÁTICAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Performing Arts"
},
{
    "code" : "ANT028000",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Non-Sports Cards"
},
{
    "code" : "ANT029000",
    "description_ptbr" : "PAPÉIS EFÊMEROS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Paper Ephemera"
},
{
    "code" : "ANT031000",
    "description_ptbr" : "POLÍTICA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Political"
},
{
    "code" : "ANT032000",
    "description_ptbr" : "PORCELANA E LOUÇA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Porcelain & China"
},
{
    "code" : "ANT033000",
    "description_ptbr" : "CARTÕES POSTAIS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Postcards"
},
{
    "code" : "ANT034000",
    "description_ptbr" : "PÔSTERS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Posters"
},
{
    "code" : "ANT035000",
    "description_ptbr" : "OLARIA E CERÂMICA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Pottery & Ceramics"
},
{
    "code" : "ANT036000",
    "description_ptbr" : "RÁDIOS E TELEVISÕES (VER TAMBÉMARTES PERFORMÁTICAS)",
    "description_en" : "ANTIQUES & COLLECTIBLES / Radios & Televisions"
},
{
    "code" : "ANT037000",
    "description_ptbr" : "GRAVAÇÕES",
    "description_en" : "ANTIQUES & COLLECTIBLES / Records"
},
{
    "code" : "ANT038000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Reference"
},
{
    "code" : "ANT040000",
    "description_ptbr" : "TAPETES",
    "description_en" : "ANTIQUES & COLLECTIBLES / Rugs"
},
{
    "code" : "ANT041000",
    "description_ptbr" : "PRATA, OURO & OUTROS METAIS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Silver, Gold & Other Metals"
},
{
    "code" : "ANT042000",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS ESPORTIVOS / GERAL",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports Cards / General"
},
{
    "code" : "ANT042010",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS ESPORTIVOS / BASEBALL",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports Cards / Baseball"
},
{
    "code" : "ANT042020",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS ESPORTIVOS / BASQUETEBOL",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports Cards / Basketball"
},
{
    "code" : "ANT042030",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS ESPORTIVOS / FUTEBOL AMERICANO",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports Cards / Football"
},
{
    "code" : "ANT042040",
    "description_ptbr" : "CARTÕES COLECIONÁVEIS ESPORTIVOS / HÓQUEI",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports Cards / Hockey"
},
{
    "code" : "ANT043000",
    "description_ptbr" : "ESPORTES (VER TAMBÉM CATEGORIAS SOB CARTÕES COLECIONÁVEIS ESPORTIVOS)",
    "description_en" : "ANTIQUES & COLLECTIBLES / Sports"
},
{
    "code" : "ANT044000",
    "description_ptbr" : "SELOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Stamps"
},
{
    "code" : "ANT045000",
    "description_ptbr" : "BICHOS DE PELÚCIA",
    "description_en" : "ANTIQUES & COLLECTIBLES / Teddy Bears"
},
{
    "code" : "ANT047000",
    "description_ptbr" : "TÊXTEIS E TRAJES",
    "description_en" : "ANTIQUES & COLLECTIBLES / Textiles & Costume"
},
{
    "code" : "ANT049000",
    "description_ptbr" : "ANIMAIS DE BRINQUEDO",
    "description_en" : "ANTIQUES & COLLECTIBLES / Toy Animals"
},
{
    "code" : "ANT050000",
    "description_ptbr" : "BRINQUEDOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Toys"
},
{
    "code" : "ANT051000",
    "description_ptbr" : "VINHO",
    "description_en" : "ANTIQUES & COLLECTIBLES / Wine"
},
{
    "code" : "ANT052000",
    "description_ptbr" : "CULTURA POPULAR",
    "description_en" : "ANTIQUES & COLLECTIBLES / Popular Culture"
},
{
    "code" : "ANT053000",
    "description_ptbr" : "ESTATUEDAS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Figurines"
},
{
    "code" : "ANT054000",
    "description_ptbr" : "RELACIONADOS AO CANADÁ",
    "description_en" : "ANTIQUES & COLLECTIBLES / Canadiana"
},
{
    "code" : "ANT055000",
    "description_ptbr" : "FUMO E ASSUNTOS RELACIONADOS",
    "description_en" : "ANTIQUES & COLLECTIBLES / Tobacco-Related"
},
{
    "code" : "ARC000000",
    "description_ptbr" : "GERAL",
    "description_en" : "ARCHITECTURE / General"
},
{
    "code" : "ARC001000",
    "description_ptbr" : "CRÍTICA",
    "description_en" : "ARCHITECTURE / Criticism"
},
{
    "code" : "ARC002000",
    "description_ptbr" : "DECORAÇÃO E ORNAMENTAÇÃO",
    "description_en" : "ARCHITECTURE / Decoration & Ornament"
},
{
    "code" : "ARC003000",
    "description_ptbr" : "CONSTRUÇÕES / RESIDENCIAIS",
    "description_en" : "ARCHITECTURE / Buildings / Residential"
},
{
    "code" : "ARC004000",
    "description_ptbr" : "DESIGN, RASCUNHOS, DESENHOS & APRESENTAÇÕES",
    "description_en" : "ARCHITECTURE / Design, Drafting, Drawing & Presentation"
},
{
    "code" : "ARC005000",
    "description_ptbr" : "HISTÓRIA / GERAL",
    "description_en" : "ARCHITECTURE / History / General"
},
{
    "code" : "ARC005010",
    "description_ptbr" : "HISTÓRIA / PRÉ-HISTÓRICA & PRIMITIVA",
    "description_en" : "ARCHITECTURE / History / Prehistoric & Primitive"
},
{
    "code" : "ARC005020",
    "description_ptbr" : "HISTÓRIA / ANTIGUIDADE & CLÁSSICA",
    "description_en" : "ARCHITECTURE / History / Ancient & Classical"
},
{
    "code" : "ARC005030",
    "description_ptbr" : "HISTÓRIA / MEDIEVAL",
    "description_en" : "ARCHITECTURE / History / Medieval"
},
{
    "code" : "ARC005040",
    "description_ptbr" : "HISTÓRIA / RENASCENÇA",
    "description_en" : "ARCHITECTURE / History / Renaissance"
},
{
    "code" : "ARC005050",
    "description_ptbr" : "HISTÓRIA / BARROCO & ROCOCÓ",
    "description_en" : "ARCHITECTURE / History / Baroque & Rococo"
},
{
    "code" : "ARC005060",
    "description_ptbr" : "HISTÓRIA / ROMANTISMO",
    "description_en" : "ARCHITECTURE / History / Romanticism"
},
{
    "code" : "ARC005070",
    "description_ptbr" : "HISTÓRIA / MODERNA (FIM DO SÉCULO XIX ATÉ 1945)",
    "description_en" : "ARCHITECTURE / History / Modern (late 19th Century to 1945)"
},
{
    "code" : "ARC005080",
    "description_ptbr" : "HISTÓRIA / CONTEMPORÂNEA (1945-)",
    "description_en" : "ARCHITECTURE / History / Contemporary (1945-)"
},
{
    "code" : "ARC006000",
    "description_ptbr" : "ARQUITETOS E EMPRESAS INDIVIDUAIS / GERAL",
    "description_en" : "ARCHITECTURE / Individual Architects & Firms / General"
},
{
    "code" : "ARC006010",
    "description_ptbr" : "ARQUITETOS E EMPRESAS INDIVIDUAIS / ENSAIOS",
    "description_en" : "ARCHITECTURE / Individual Architects & Firms / Essays"
},
{
    "code" : "ARC006020",
    "description_ptbr" : "ARQUITETOS E EMPRESAS INDIVIDUAIS / MONOGRAFIAS",
    "description_en" : "ARCHITECTURE / Individual Architects & Firms / Monographs"
},
{
    "code" : "ARC007000",
    "description_ptbr" : "DESIGN DE INTERIORES / GERAL",
    "description_en" : "ARCHITECTURE / Interior Design / General"
},
{
    "code" : "ARC007010",
    "description_ptbr" : "DESIGN DE INTERIORES / ILUMINAÇÃO",
    "description_en" : "ARCHITECTURE / Interior Design / Lighting"
},
{
    "code" : "ARC008000",
    "description_ptbr" : "PAISAGEM",
    "description_en" : "ARCHITECTURE / Landscape"
},
{
    "code" : "ARC009000",
    "description_ptbr" : "MÉTODOS E MATERIAIS",
    "description_en" : "ARCHITECTURE / Methods & Materials"
},
{
    "code" : "ARC010000",
    "description_ptbr" : "URBANA E PLANEJAMENTO",
    "description_en" : "ARCHITECTURE / Urban & Land Use Planning"
},
{
    "code" : "ARC011000",
    "description_ptbr" : "CONSTRUÇÕES / PÚBLICAS, COMERCIAIS & INDUSTRIAIS",
    "description_en" : "ARCHITECTURE / Buildings / Public, Commercial & Industrial"
},
{
    "code" : "ARC012000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "ARCHITECTURE / Reference"
},
{
    "code" : "ARC013000",
    "description_ptbr" : "ENSINO & APRENDIZADO",
    "description_en" : "ARCHITECTURE / Study & Teaching"
},
{
    "code" : "ARC014000",
    "description_ptbr" : "PRESERVAÇÃO HISTÓRICA / GERAL",
    "description_en" : "ARCHITECTURE / Historic Preservation / General"
},
{
    "code" : "ARC014010",
    "description_ptbr" : "PRESERVAÇÃO HISTÓRICA / TÉCNICAS DE RESTAURAÇÃO",
    "description_en" : "ARCHITECTURE / Historic Preservation / Restoration Techniques"
},
{
    "code" : "ARC015000",
    "description_ptbr" : "PRÁTICA PROFISSIONAL",
    "description_en" : "ARCHITECTURE / Professional Practice"
},
{
    "code" : "ARC016000",
    "description_ptbr" : "CONSTRUÇÕES / RELIGIOSAS",
    "description_en" : "ARCHITECTURE / Buildings / Religious"
},
{
    "code" : "ARC017000",
    "description_ptbr" : "GERENCIAMENTO DE PROJETO",
    "description_en" : "ARCHITECTURE / Project Management"
},
{
    "code" : "ARC018000",
    "description_ptbr" : "SUSTENTABILIDADE & DESIGN VERDE",
    "description_en" : "ARCHITECTURE / Sustainability & Green Design"
},
{
    "code" : "ARC019000",
    "description_ptbr" : "CÓDIGOS & PADRÕES",
    "description_en" : "ARCHITECTURE / Codes & Standards"
},
{
    "code" : "ARC020000",
    "description_ptbr" : "REGIONAL",
    "description_en" : "ARCHITECTURE / Regional"
},
{
    "code" : "ARC021000",
    "description_ptbr" : "DESIGN DE SEGURANÇA",
    "description_en" : "ARCHITECTURE / Security Design"
},
{
    "code" : "ARC022000",
    "description_ptbr" : "REUTILIZAÇÃO ADAPTADA & RENOVAÇÃO",
    "description_en" : "ARCHITECTURE / Adaptive Reuse & Renovation"
},
{
    "code" : "ARC023000",
    "description_ptbr" : "ANUÁRIOS",
    "description_en" : "ARCHITECTURE / Annuals"
},
{
    "code" : "ARC024000",
    "description_ptbr" : "CONSTRUÇÕES / GERAL",
    "description_en" : "ARCHITECTURE / Buildings / General"
},
{
    "code" : "ARC024010",
    "description_ptbr" : "MARCOS & MONUMENTOS",
    "description_en" : "ARCHITECTURE / Buildings / Landmarks & Monuments"
},
{
    "code" : "ART000000",
    "description_ptbr" : "GERAL",
    "description_en" : "ART / General"
},
{
    "code" : "ART002000",
    "description_ptbr" : "TÉCNICAS / AERÓGRAFO",
    "description_en" : "ART / Techniques / Airbrush"
},
{
    "code" : "ART003000",
    "description_ptbr" : "TÉCNICAS / CALIGRAFIA",
    "description_en" : "ART / Techniques / Calligraphy"
},
{
    "code" : "ART004000",
    "description_ptbr" : "TÉCNICAS / CARTUNISMO",
    "description_en" : "ART / Techniques / Cartooning"
},
{
    "code" : "ART006000",
    "description_ptbr" : "COLEÇÕES, CATÁLOGOS, EXIBIÇÕES / GERAL",
    "description_en" : "ART / Collections, Catalogs, Exhibitions / General"
},
{
    "code" : "ART006010",
    "description_ptbr" : "COLEÇÕES, CATÁLOGOS, EXIBIÇÕES / MOSTRAS EM GRUPO",
    "description_en" : "ART / Collections, Catalogs, Exhibitions / Group Shows"
},
{
    "code" : "ART006020",
    "description_ptbr" : "COLEÇÕES, CATÁLOGOS, EXIBIÇÕES / COLEÇÕES PERMANENTES",
    "description_en" : "ART / Collections, Catalogs, Exhibitions / Permanent Collections"
},
{
    "code" : "ART007000",
    "description_ptbr" : "TEORIA DAS CORES",
    "description_en" : "ART / Color Theory"
},
{
    "code" : "ART008000",
    "description_ptbr" : "CONCEITUAL",
    "description_en" : "ART / Conceptual"
},
{
    "code" : "ART009000",
    "description_ptbr" : "CRÍTICA & TEORIA",
    "description_en" : "ART / Criticism & Theory"
},
{
    "code" : "ART010000",
    "description_ptbr" : "TÉCNICAS / DESENHO",
    "description_en" : "ART / Techniques / Drawing"
},
{
    "code" : "ART013000",
    "description_ptbr" : "POPULAR & ARTE MARGINAL",
    "description_en" : "ART / Folk & Outsider Art"
},
{
    "code" : "ART015000",
    "description_ptbr" : "HISTÓRIA / GERAL",
    "description_en" : "ART / History / General"
},
{
    "code" : "ART015010",
    "description_ptbr" : "ÁFRICA",
    "description_en" : "ART / African"
},
{
    "code" : "ART015020",
    "description_ptbr" : "ESTADOS UNIDOS / GERAL",
    "description_en" : "ART / American / General"
},
{
    "code" : "ART015030",
    "description_ptbr" : "EUROPA",
    "description_en" : "ART / European"
},
{
    "code" : "ART015040",
    "description_ptbr" : "CANADÁ",
    "description_en" : "ART / Canadian"
},
{
    "code" : "ART015050",
    "description_ptbr" : "HISTÓRIA / PRÉ-HISTÓRICA & PRIMITIVA",
    "description_en" : "ART / History / Prehistoric & Primitive"
},
{
    "code" : "ART015060",
    "description_ptbr" : "HISTÓRIA / ANTIGUIDADE & CLÁSSICA",
    "description_en" : "ART / History / Ancient & Classical"
},
{
    "code" : "ART015070",
    "description_ptbr" : "HISTÓRIA / MEDIEVAL",
    "description_en" : "ART / History / Medieval"
},
{
    "code" : "ART015080",
    "description_ptbr" : "HISTÓRIA / RENASCENÇA",
    "description_en" : "ART / History / Renaissance"
},
{
    "code" : "ART015090",
    "description_ptbr" : "HISTÓRIA / BARROCO & ROCOCÓ",
    "description_en" : "ART / History / Baroque & Rococo"
},
{
    "code" : "ART015100",
    "description_ptbr" : "HISTÓRIA / MODERNA (FIM DO SÉCULO XIX ATÉ 1945)",
    "description_en" : "ART / History / Modern (late 19th Century to 1945)"
},
{
    "code" : "ART015110",
    "description_ptbr" : "HISTÓRIA / CONTEMPORÂNEA (1945-)",
    "description_en" : "ART / History / Contemporary (1945-)"
},
{
    "code" : "ART015120",
    "description_ptbr" : "HISTÓRIA / ROMANTISMO",
    "description_en" : "ART / History / Romanticism"
},
{
    "code" : "ART016000",
    "description_ptbr" : "ARTISTAS INDIVIDUAIS / GERAL",
    "description_en" : "ART / Individual Artists / General"
},
{
    "code" : "ART016010",
    "description_ptbr" : "ARTISTAS INDIVIDUAIS / LIVROS DOS ARTISTAS",
    "description_en" : "ART / Individual Artists / Artists' Books"
},
{
    "code" : "ART016020",
    "description_ptbr" : "ARTISTAS INDIVIDUAIS / ENSAIOS",
    "description_en" : "ART / Individual Artists / Essays"
},
{
    "code" : "ART016030",
    "description_ptbr" : "ARTISTAS INDIVIDUAIS / MONOGRAFIAS",
    "description_en" : "ART / Individual Artists / Monographs"
},
{
    "code" : "ART017000",
    "description_ptbr" : "MÍDIAS INTEGRADAS",
    "description_en" : "ART / Mixed Media"
},
{
    "code" : "ART018000",
    "description_ptbr" : "TÉCNICAS / TINTA À ÓLEO",
    "description_en" : "ART / Techniques / Oil Painting"
},
{
    "code" : "ART019000",
    "description_ptbr" : "ÁSIA",
    "description_en" : "ART / Asian"
},
{
    "code" : "ART020000",
    "description_ptbr" : "TÉCNICAS / PINTURA",
    "description_en" : "ART / Techniques / Painting"
},
{
    "code" : "ART021000",
    "description_ptbr" : "TÉCNICAS / DESENHO COM PASTEL",
    "description_en" : "ART / Techniques / Pastel Drawing"
},
{
    "code" : "ART023000",
    "description_ptbr" : "CULTURA POPULAR",
    "description_en" : "ART / Popular Culture"
},
{
    "code" : "ART024000",
    "description_ptbr" : "TÉCNICAS / PRODUÇÃO DE GRAVURAS",
    "description_en" : "ART / Techniques / Printmaking"
},
{
    "code" : "ART025000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "ART / Reference"
},
{
    "code" : "ART026000",
    "description_ptbr" : "ESCULTURA & INSTALAÇÃO",
    "description_en" : "ART / Sculpture & Installation"
},
{
    "code" : "ART027000",
    "description_ptbr" : "ENSINO & APRENDIZADO ",
    "description_en" : "ART / Study & Teaching"
},
{
    "code" : "ART028000",
    "description_ptbr" : "TÉCNICAS / GERAL",
    "description_en" : "ART / Techniques / General"
},
{
    "code" : "ART029000",
    "description_ptbr" : "TÉCNICAS / TINTA AQUARELÁVEL",
    "description_en" : "ART / Techniques / Watercolor Painting"
},
{
    "code" : "ART031000",
    "description_ptbr" : "TÉCNICAS / TINTA ACRÍLICA",
    "description_en" : "ART / Techniques / Acrylic Painting"
},
{
    "code" : "ART033000",
    "description_ptbr" : "TÉCNICAS / DESENHO COM CANETA & TINTA",
    "description_en" : "ART / Techniques / Pen & Ink Drawing"
},
{
    "code" : "ART034000",
    "description_ptbr" : "TÉCNICAS / DESENHO COM LÁPIS",
    "description_en" : "ART / Techniques / Pencil Drawing"
},
{
    "code" : "ART035000",
    "description_ptbr" : "ASSUNTOS & TEMAS / RELIGIOSO",
    "description_en" : "ART / Subjects & Themes / Religious"
},
{
    "code" : "ART037000",
    "description_ptbr" : "ARTE E POLÍTICA",
    "description_en" : "ART / Art & Politics"
},
{
    "code" : "ART038000",
    "description_ptbr" : "ESTADOS UNIDOS / AFROAMERICANA",
    "description_en" : "ART / American / African American"
},
{
    "code" : "ART039000",
    "description_ptbr" : "ESTADOS UNIDOS / ASIOAMERICANOS",
    "description_en" : "ART / American / Asian American"
},
{
    "code" : "ART040000",
    "description_ptbr" : "ESTADOS UNIDOS / LATINOAMERICANOS",
    "description_en" : "ART / American / Hispanic American"
},
{
    "code" : "ART041000",
    "description_ptbr" : "NATIVOS DA AMÉRICA",
    "description_en" : "ART / Native American"
},
{
    "code" : "ART042000",
    "description_ptbr" : "AUSTRÁLIA E OCEANIA",
    "description_en" : "ART / Australian & Oceanian"
},
{
    "code" : "ART043000",
    "description_ptbr" : "ASPECTOS EMPRESARIAIS",
    "description_en" : "ART / Business Aspects"
},
{
    "code" : "ART044000",
    "description_ptbr" : "CARIBE E AMÉRICA LATINA",
    "description_en" : "ART / Caribbean & Latin American"
},
{
    "code" : "ART045000",
    "description_ptbr" : "CERÂMICA",
    "description_en" : "ART / Ceramics"
},
{
    "code" : "ART046000",
    "description_ptbr" : "DIGITAL",
    "description_en" : "ART / Digital"
},
{
    "code" : "ART047000",
    "description_ptbr" : "ORIENTE MÉDIO",
    "description_en" : "ART / Middle Eastern"
},
{
    "code" : "ART048000",
    "description_ptbr" : "REPRODUÇÕES",
    "description_en" : "ART / Prints"
},
{
    "code" : "ART049000",
    "description_ptbr" : "RÚSSIA & ANTIGA UNIÃO SOVIÉTICA",
    "description_en" : "ART / Russian & Former Soviet Union"
},
{
    "code" : "ART050000",
    "description_ptbr" : "ASSUNTOS & TEMAS / GERAL",
    "description_en" : "ART / Subjects & Themes / General"
},
{
    "code" : "ART050010",
    "description_ptbr" : "ASSUNTOS & TEMAS / FIGURA HUMANA",
    "description_en" : "ART / Subjects & Themes / Human Figure"
},
{
    "code" : "ART050020",
    "description_ptbr" : "ASSUNTOS & TEMAS / PAISAGENS",
    "description_en" : "ART / Subjects & Themes / Landscapes & Seascapes"
},
{
    "code" : "ART050030",
    "description_ptbr" : "ASSUNTOS & TEMAS / PLANTAS & ANIMAIS",
    "description_en" : "ART / Subjects & Themes / Plants & Animals"
},
{
    "code" : "ART050040",
    "description_ptbr" : "ASSUNTOS & TEMAS / RETRATOS",
    "description_en" : "ART / Subjects & Themes / Portraits"
},
{
    "code" : "ART050050",
    "description_ptbr" : "ASSUNTOS & TEMAS / ERÓTICO",
    "description_en" : "ART / Subjects & Themes / Erotica"
},
{
    "code" : "ART051000",
    "description_ptbr" : "TÉCNICAS / COR",
    "description_en" : "ART / Techniques / Color"
},
{
    "code" : "ART052000",
    "description_ptbr" : "TÉCNICAS / DESENHO DE MODELO VIVO",
    "description_en" : "ART / Techniques / Life Drawing"
},
{
    "code" : "ART053000",
    "description_ptbr" : "TÉCNICAS / ESCULTURA",
    "description_en" : "ART / Techniques / Sculpting"
},
{
    "code" : "ART054000",
    "description_ptbr" : "ANUÁRIOS",
    "description_en" : "ART / Annuals"
},
{
    "code" : "ART055000",
    "description_ptbr" : "ARTE CORPORAL E TATUAGEM",
    "description_en" : "ART / Body Art & Tattooing"
},
{
    "code" : "ART056000",
    "description_ptbr" : "CONSERVAÇÃO & PRESERVAÇÃO",
    "description_en" : "ART / Conservation & Preservation"
},
{
    "code" : "ART057000",
    "description_ptbr" : "FILME & VÍDEO",
    "description_en" : "ART / Film & Video"
},
{
    "code" : "ART058000",
    "description_ptbr" : "GRAFITE & ARTE DE RUA",
    "description_en" : "ART / Graffiti & Street Art"
},
{
    "code" : "ART059000",
    "description_ptbr" : "ESTUDOS DE MUSEUS",
    "description_en" : "ART / Museum Studies"
},
{
    "code" : "ART060000",
    "description_ptbr" : "PERFORMANCE",
    "description_en" : "ART / Performance"
},
{
    "code" : "BIB000000",
    "description_ptbr" : "GERAL ",
    "description_en" : "BIBLES / General"
},
{
    "code" : "BIB001000",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / GERAL",
    "description_en" : "BIBLES / Christian Standard Bible / General"
},
{
    "code" : "BIB001010",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / INFANTIL ",
    "description_en" : "BIBLES / Christian Standard Bible / Children"
},
{
    "code" : "BIB001020",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / DEVOCIONAL",
    "description_en" : "BIBLES / Christian Standard Bible / Devotional"
},
{
    "code" : "BIB001030",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / NOVO TESTAMENTO & PORÇÕES ",
    "description_en" : "BIBLES / Christian Standard Bible / New Testament & Portions"
},
{
    "code" : "BIB001040",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / REFERÊNCIA ",
    "description_en" : "BIBLES / Christian Standard Bible / Reference"
},
{
    "code" : "BIB001050",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / ESTUDOS",
    "description_en" : "BIBLES / Christian Standard Bible / Study"
},
{
    "code" : "BIB001060",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / TEXTO",
    "description_en" : "BIBLES / Christian Standard Bible / Text"
},
{
    "code" : "BIB001070",
    "description_ptbr" : "BÍBLIA PADRÃO CRISTÃ / JUVENTUDE & ADOLESCÊNCIA",
    "description_en" : "BIBLES / Christian Standard Bible / Youth & Teen"
},
{
    "code" : "BIB002000",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO /  GERAL ",
    "description_en" : "BIBLES / Contemporary English Version / General"
},
{
    "code" : "BIB002010",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO / INFANTIL",
    "description_en" : "BIBLES / Contemporary English Version / Children"
},
{
    "code" : "BIB002020",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO / DEVOCIONAL",
    "description_en" : "BIBLES / Contemporary English Version / Devotional"
},
{
    "code" : "BIB002030",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Contemporary English Version / New Testament & Portions"
},
{
    "code" : "BIB002040",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO / REFERÊNCIA  ",
    "description_en" : "BIBLES / Contemporary English Version / Reference"
},
{
    "code" : "BIB002050",
    "description_ptbr" : "VERSÃO EM INGLÊS CONTEMPORÂNEO / ESTUDOS ",
    "description_en" : "BIBLES / Contemporary English Version / Study"
},
{
    "code" : "BIB002060",
    "description_ptbr" : " VERSÃO EM INGLÊS CONTEMPORÂNEO / TEXTO",
    "description_en" : "BIBLES / Contemporary English Version / Text"
},
{
    "code" : "BIB002070",
    "description_ptbr" : " VERSÃO EM INGLÊS CONTEMPORÂNEO / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Contemporary English Version / Youth & Teen"
},
{
    "code" : "BIB003000",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO /  GERAL ",
    "description_en" : "BIBLES / English Standard Version / General"
},
{
    "code" : "BIB003010",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO / INFANTIL",
    "description_en" : "BIBLES / English Standard Version / Children"
},
{
    "code" : "BIB003020",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO / DEVOCIONAL",
    "description_en" : "BIBLES / English Standard Version / Devotional"
},
{
    "code" : "BIB003030",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / English Standard Version / New Testament & Portions"
},
{
    "code" : "BIB003040",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO / REFERÊNCIA  ",
    "description_en" : "BIBLES / English Standard Version / Reference"
},
{
    "code" : "BIB003050",
    "description_ptbr" : "VERSÃO EM INGLÊS PADRÃO / ESTUDOS ",
    "description_en" : "BIBLES / English Standard Version / Study"
},
{
    "code" : "BIB003060",
    "description_ptbr" : " VERSÃO EM INGLÊS PADRÃO / TEXTO",
    "description_en" : "BIBLES / English Standard Version / Text"
},
{
    "code" : "BIB003070",
    "description_ptbr" : " VERSÃO EM INGLÊS PADRÃO / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / English Standard Version / Youth & Teen"
},
{
    "code" : "BIB004000",
    "description_ptbr" : "PALAVRA DE DEUS /  GERAL ",
    "description_en" : "BIBLES / God's Word / General"
},
{
    "code" : "BIB004010",
    "description_ptbr" : "PALAVRA DE DEUS / INFANTIL",
    "description_en" : "BIBLES / God's Word / Children"
},
{
    "code" : "BIB004020",
    "description_ptbr" : "PALAVRA DE DEUS / DEVOCIONAL",
    "description_en" : "BIBLES / God's Word / Devotional"
},
{
    "code" : "BIB004030",
    "description_ptbr" : "PALAVRA DE DEUS / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / God's Word / New Testament & Portions"
},
{
    "code" : "BIB004040",
    "description_ptbr" : "PALAVRA DE DEUS / REFERÊNCIA  ",
    "description_en" : "BIBLES / God's Word / Reference"
},
{
    "code" : "BIB004050",
    "description_ptbr" : "PALAVRA DE DEUS / ESTUDOS ",
    "description_en" : "BIBLES / God's Word / Study"
},
{
    "code" : "BIB004060",
    "description_ptbr" : "PALAVRA DE DEUS / TEXTO",
    "description_en" : "BIBLES / God's Word / Text"
},
{
    "code" : "BIB004070",
    "description_ptbr" : "PALAVRA DE DEUS / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / God's Word / Youth & Teen"
},
{
    "code" : "BIB005000",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS /  GERAL ",
    "description_en" : "BIBLES / International Children's Bible / General"
},
{
    "code" : "BIB005010",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS / INFANTIL",
    "description_en" : "BIBLES / International Children's Bible / Children"
},
{
    "code" : "BIB005020",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS / DEVOCIONAL",
    "description_en" : "BIBLES / International Children's Bible / Devotional"
},
{
    "code" : "BIB005030",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / International Children's Bible / New Testament & Portions"
},
{
    "code" : "BIB005040",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS / REFERÊNCIA  ",
    "description_en" : "BIBLES / International Children's Bible / Reference"
},
{
    "code" : "BIB005050",
    "description_ptbr" : "BÍBLIA INTERNACIONAL DAS CRIANÇAS / ESTUDOS ",
    "description_en" : "BIBLES / International Children's Bible / Study"
},
{
    "code" : "BIB005060",
    "description_ptbr" : " BÍBLIA INTERNACIONAL DAS CRIANÇAS / TEXTO",
    "description_en" : "BIBLES / International Children's Bible / Text"
},
{
    "code" : "BIB005070",
    "description_ptbr" : " BÍBLIA INTERNACIONAL DAS CRIANÇAS / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / International Children's Bible / Youth & Teen"
},
{
    "code" : "BIB006000",
    "description_ptbr" : "VERSÃO KING JAMES /  GERAL ",
    "description_en" : "BIBLES / King James Version / General"
},
{
    "code" : "BIB006010",
    "description_ptbr" : "VERSÃO KING JAMES / INFANTIL",
    "description_en" : "BIBLES / King James Version / Children"
},
{
    "code" : "BIB006020",
    "description_ptbr" : "VERSÃO KING JAMES / DEVOCIONAL",
    "description_en" : "BIBLES / King James Version / Devotional"
},
{
    "code" : "BIB006030",
    "description_ptbr" : "VERSÃO KING JAMES / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / King James Version / New Testament & Portions"
},
{
    "code" : "BIB006040",
    "description_ptbr" : "VERSÃO KING JAMES / REFERÊNCIA  ",
    "description_en" : "BIBLES / King James Version / Reference"
},
{
    "code" : "BIB006050",
    "description_ptbr" : "VERSÃO KING JAMES / ESTUDOS ",
    "description_en" : "BIBLES / King James Version / Study"
},
{
    "code" : "BIB006060",
    "description_ptbr" : " VERSÃO KING JAMES / TEXTO",
    "description_en" : "BIBLES / King James Version / Text"
},
{
    "code" : "BIB006070",
    "description_ptbr" : "VERSÃO KING JAMES / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / King James Version / Youth & Teen"
},
{
    "code" : "BIB007000",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS /  GERAL ",
    "description_en" : "BIBLES / La Biblia de las Americas / General"
},
{
    "code" : "BIB007010",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / INFANTIL",
    "description_en" : "BIBLES / La Biblia de las Americas / Children"
},
{
    "code" : "BIB007020",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / DEVOCIONAL",
    "description_en" : "BIBLES / La Biblia de las Americas / Devotional"
},
{
    "code" : "BIB007030",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / La Biblia de las Americas / New Testament & Portions"
},
{
    "code" : "BIB007040",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / REFERÊNCIA  ",
    "description_en" : "BIBLES / La Biblia de las Americas / Reference"
},
{
    "code" : "BIB007050",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / ESTUDOS ",
    "description_en" : "BIBLES / La Biblia de las Americas / Study"
},
{
    "code" : "BIB007060",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / TEXTO",
    "description_en" : "BIBLES / La Biblia de las Americas / Text"
},
{
    "code" : "BIB007070",
    "description_ptbr" : "LA BIBLIA DE LAS AMERICAS / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / La Biblia de las Americas / Youth & Teen"
},
{
    "code" : "BIB008000",
    "description_ptbr" : "TRADUÇÕES VARIADAS /  GERAL ",
    "description_en" : "BIBLES / Multiple Translations / General"
},
{
    "code" : "BIB008010",
    "description_ptbr" : "TRADUÇÕES VARIADAS / INFANTIL",
    "description_en" : "BIBLES / Multiple Translations / Children"
},
{
    "code" : "BIB008020",
    "description_ptbr" : "TRADUÇÕES VARIADAS / DEVOCIONAL",
    "description_en" : "BIBLES / Multiple Translations / Devotional"
},
{
    "code" : "BIB008030",
    "description_ptbr" : "TRADUÇÕES VARIADAS / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Multiple Translations / New Testament & Portions"
},
{
    "code" : "BIB008040",
    "description_ptbr" : "TRADUÇÕES VARIADAS / REFERÊNCIA  ",
    "description_en" : "BIBLES / Multiple Translations / Reference"
},
{
    "code" : "BIB008050",
    "description_ptbr" : "TRADUÇÕES VARIADAS / ESTUDOS ",
    "description_en" : "BIBLES / Multiple Translations / Study"
},
{
    "code" : "BIB008060",
    "description_ptbr" : "TRADUÇÕES VARIADAS / TEXTO",
    "description_en" : "BIBLES / Multiple Translations / Text"
},
{
    "code" : "BIB008070",
    "description_ptbr" : "TRADUÇÕES VARIADAS / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Multiple Translations / Youth & Teen"
},
{
    "code" : "BIB009000",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA /  GERAL ",
    "description_en" : "BIBLES / New American Bible / General"
},
{
    "code" : "BIB009010",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA / INFANTIL",
    "description_en" : "BIBLES / New American Bible / Children"
},
{
    "code" : "BIB009020",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA / DEVOCIONAL",
    "description_en" : "BIBLES / New American Bible / Devotional"
},
{
    "code" : "BIB009030",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New American Bible / New Testament & Portions"
},
{
    "code" : "BIB009040",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA / REFERÊNCIA  ",
    "description_en" : "BIBLES / New American Bible / Reference"
},
{
    "code" : "BIB009050",
    "description_ptbr" : "NOVA BÍBLIA AMERICANA / ESTUDOS ",
    "description_en" : "BIBLES / New American Bible / Study"
},
{
    "code" : "BIB009060",
    "description_ptbr" : " NOVA BÍBLIA AMERICANA / TEXTO",
    "description_en" : "BIBLES / New American Bible / Text"
},
{
    "code" : "BIB009070",
    "description_ptbr" : " NOVA BÍBLIA AMERICANA / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New American Bible / Youth & Teen"
},
{
    "code" : "BIB010000",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA /  GERAL ",
    "description_en" : "BIBLES / New American Standard Bible / General"
},
{
    "code" : "BIB010010",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA / INFANTIL",
    "description_en" : "BIBLES / New American Standard Bible / Children"
},
{
    "code" : "BIB010020",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA / DEVOCIONAL",
    "description_en" : "BIBLES / New American Standard Bible / Devotional"
},
{
    "code" : "BIB010030",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New American Standard Bible / New Testament & Portions"
},
{
    "code" : "BIB010040",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA / REFERÊNCIA  ",
    "description_en" : "BIBLES / New American Standard Bible / Reference"
},
{
    "code" : "BIB010050",
    "description_ptbr" : "NOVA BÍBLIA PADRÃO AMERICANA / ESTUDOS ",
    "description_en" : "BIBLES / New American Standard Bible / Study"
},
{
    "code" : "BIB010060",
    "description_ptbr" : " NOVA BÍBLIA PADRÃO AMERICANA / TEXTO",
    "description_en" : "BIBLES / New American Standard Bible / Text"
},
{
    "code" : "BIB010070",
    "description_ptbr" : " NOVA BÍBLIA PADRÃO AMERICANA / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New American Standard Bible / Youth & Teen"
},
{
    "code" : "BIB011000",
    "description_ptbr" : "VERSÃO NOVO SÉCULO /  GERAL ",
    "description_en" : "BIBLES / New Century Version / General"
},
{
    "code" : "BIB011010",
    "description_ptbr" : "VERSÃO NOVO SÉCULO / INFANTIL",
    "description_en" : "BIBLES / New Century Version / Children"
},
{
    "code" : "BIB011020",
    "description_ptbr" : "VERSÃO NOVO SÉCULO / DEVOCIONAL",
    "description_en" : "BIBLES / New Century Version / Devotional"
},
{
    "code" : "BIB011030",
    "description_ptbr" : "VERSÃO NOVO SÉCULO / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New Century Version / New Testament & Portions"
},
{
    "code" : "BIB011040",
    "description_ptbr" : "VERSÃO NOVO SÉCULO / REFERÊNCIA  ",
    "description_en" : "BIBLES / New Century Version / Reference"
},
{
    "code" : "BIB011050",
    "description_ptbr" : "VERSÃO NOVO SÉCULO / ESTUDOS ",
    "description_en" : "BIBLES / New Century Version / Study"
},
{
    "code" : "BIB011060",
    "description_ptbr" : " VERSÃO NOVO SÉCULO / TEXTO",
    "description_en" : "BIBLES / New Century Version / Text"
},
{
    "code" : "BIB011070",
    "description_ptbr" : " VERSÃO NOVO SÉCULO / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New Century Version / Youth & Teen"
},
{
    "code" : "BIB012000",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR /  GERAL ",
    "description_en" : "BIBLES / New International Reader's Version / General"
},
{
    "code" : "BIB012010",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / INFANTIL",
    "description_en" : "BIBLES / New International Reader's Version / Children"
},
{
    "code" : "BIB012020",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / DEVOCIONAL",
    "description_en" : "BIBLES / New International Reader's Version / Devotional"
},
{
    "code" : "BIB012030",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New International Reader's Version / New Testament & Portions"
},
{
    "code" : "BIB012040",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / REFERÊNCIA  ",
    "description_en" : "BIBLES / New International Reader's Version / Reference"
},
{
    "code" : "BIB012050",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / ESTUDOS ",
    "description_en" : "BIBLES / New International Reader's Version / Study"
},
{
    "code" : "BIB012060",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / TEXTO",
    "description_en" : "BIBLES / New International Reader's Version / Text"
},
{
    "code" : "BIB012070",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL DO LEITOR / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New International Reader's Version / Youth & Teen"
},
{
    "code" : "BIB013000",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL /  GERAL ",
    "description_en" : "BIBLES / New International Version / General"
},
{
    "code" : "BIB013010",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / INFANTIL",
    "description_en" : "BIBLES / New International Version / Children"
},
{
    "code" : "BIB013020",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / DEVOCIONAL",
    "description_en" : "BIBLES / New International Version / Devotional"
},
{
    "code" : "BIB013030",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New International Version / New Testament & Portions"
},
{
    "code" : "BIB013040",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / REFERÊNCIA  ",
    "description_en" : "BIBLES / New International Version / Reference"
},
{
    "code" : "BIB013050",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / ESTUDOS ",
    "description_en" : "BIBLES / New International Version / Study"
},
{
    "code" : "BIB013060",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / TEXTO",
    "description_en" : "BIBLES / New International Version / Text"
},
{
    "code" : "BIB013070",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New International Version / Youth & Teen"
},
{
    "code" : "BIB014000",
    "description_ptbr" : "NOVA VERSÃO KING JAMES /  GERAL ",
    "description_en" : "BIBLES / New King James Version / General"
},
{
    "code" : "BIB014010",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / INFANTIL",
    "description_en" : "BIBLES / New King James Version / Children"
},
{
    "code" : "BIB014020",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / DEVOCIONAL",
    "description_en" : "BIBLES / New King James Version / Devotional"
},
{
    "code" : "BIB014030",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New King James Version / New Testament & Portions"
},
{
    "code" : "BIB014040",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / REFERÊNCIA  ",
    "description_en" : "BIBLES / New King James Version / Reference"
},
{
    "code" : "BIB014050",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / ESTUDOS ",
    "description_en" : "BIBLES / New King James Version / Study"
},
{
    "code" : "BIB014060",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / TEXTO",
    "description_en" : "BIBLES / New King James Version / Text"
},
{
    "code" : "BIB014070",
    "description_ptbr" : "NOVA VERSÃO KING JAMES / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New King James Version / Youth & Teen"
},
{
    "code" : "BIB015000",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA /  GERAL ",
    "description_en" : "BIBLES / New Living Translation / General"
},
{
    "code" : "BIB015010",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / INFANTIL",
    "description_en" : "BIBLES / New Living Translation / Children"
},
{
    "code" : "BIB015020",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / DEVOCIONAL",
    "description_en" : "BIBLES / New Living Translation / Devotional"
},
{
    "code" : "BIB015030",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New Living Translation / New Testament & Portions"
},
{
    "code" : "BIB015040",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / REFERÊNCIA  ",
    "description_en" : "BIBLES / New Living Translation / Reference"
},
{
    "code" : "BIB015050",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / ESTUDOS ",
    "description_en" : "BIBLES / New Living Translation / Study"
},
{
    "code" : "BIB015060",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / TEXTO",
    "description_en" : "BIBLES / New Living Translation / Text"
},
{
    "code" : "BIB015070",
    "description_ptbr" : "TRADUÇÃO NOVA VIDA / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New Living Translation / Youth & Teen"
},
{
    "code" : "BIB016000",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA /  GERAL ",
    "description_en" : "BIBLES / New Revised Standard Version / General"
},
{
    "code" : "BIB016010",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / INFANTIL",
    "description_en" : "BIBLES / New Revised Standard Version / Children"
},
{
    "code" : "BIB016020",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / DEVOCIONAL",
    "description_en" : "BIBLES / New Revised Standard Version / Devotional"
},
{
    "code" : "BIB016030",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / New Revised Standard Version / New Testament & Portions"
},
{
    "code" : "BIB016040",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / REFERÊNCIA  ",
    "description_en" : "BIBLES / New Revised Standard Version / Reference"
},
{
    "code" : "BIB016050",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / ESTUDOS ",
    "description_en" : "BIBLES / New Revised Standard Version / Study"
},
{
    "code" : "BIB016060",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / TEXTO",
    "description_en" : "BIBLES / New Revised Standard Version / Text"
},
{
    "code" : "BIB016070",
    "description_ptbr" : "NOVA VERSÃO PADRÃO REVISADA / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / New Revised Standard Version / Youth & Teen"
},
{
    "code" : "BIB017000",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL /  GERAL ",
    "description_en" : "BIBLES / Nueva Version International / General"
},
{
    "code" : "BIB017010",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / INFANTIL",
    "description_en" : "BIBLES / Nueva Version International / Children"
},
{
    "code" : "BIB017020",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / DEVOCIONAL",
    "description_en" : "BIBLES / Nueva Version International / Devotional"
},
{
    "code" : "BIB017030",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Nueva Version International / New Testament & Portions"
},
{
    "code" : "BIB017040",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / REFERÊNCIA  ",
    "description_en" : "BIBLES / Nueva Version International / Reference"
},
{
    "code" : "BIB017050",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / ESTUDOS ",
    "description_en" : "BIBLES / Nueva Version International / Study"
},
{
    "code" : "BIB017060",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / TEXTO",
    "description_en" : "BIBLES / Nueva Version International / Text"
},
{
    "code" : "BIB017070",
    "description_ptbr" : "NUEVA VERSION INTERNATIONAL / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Nueva Version International / Youth & Teen"
},
{
    "code" : "BIB018000",
    "description_ptbr" : "OUTRAS TRADUÇÕES /  GERAL ",
    "description_en" : "BIBLES / Other Translations / General"
},
{
    "code" : "BIB018010",
    "description_ptbr" : "OUTRAS TRADUÇÕES / INFANTIL",
    "description_en" : "BIBLES / Other Translations / Children"
},
{
    "code" : "BIB018020",
    "description_ptbr" : "OUTRAS TRADUÇÕES / DEVOCIONAL",
    "description_en" : "BIBLES / Other Translations / Devotional"
},
{
    "code" : "BIB018030",
    "description_ptbr" : "OUTRAS TRADUÇÕES / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Other Translations / New Testament & Portions"
},
{
    "code" : "BIB018040",
    "description_ptbr" : "OUTRAS TRADUÇÕES / REFERÊNCIA  ",
    "description_en" : "BIBLES / Other Translations / Reference"
},
{
    "code" : "BIB018050",
    "description_ptbr" : "OUTRAS TRADUÇÕES / ESTUDOS ",
    "description_en" : "BIBLES / Other Translations / Study"
},
{
    "code" : "BIB018060",
    "description_ptbr" : " OUTRAS TRADUÇÕES / TEXTO",
    "description_en" : "BIBLES / Other Translations / Text"
},
{
    "code" : "BIB018070",
    "description_ptbr" : "OUTRAS TRADUÇÕES / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Other Translations / Youth & Teen"
},
{
    "code" : "BIB019000",
    "description_ptbr" : "REINA VALERA /  GERAL ",
    "description_en" : "BIBLES / Reina Valera / General"
},
{
    "code" : "BIB019010",
    "description_ptbr" : "REINA VALERA / INFANTIL",
    "description_en" : "BIBLES / Reina Valera / Children"
},
{
    "code" : "BIB019020",
    "description_ptbr" : "REINA VALERA / DEVOCIONAL",
    "description_en" : "BIBLES / Reina Valera / Devotional"
},
{
    "code" : "BIB019030",
    "description_ptbr" : "REINA VALERA / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Reina Valera / New Testament & Portions"
},
{
    "code" : "BIB019040",
    "description_ptbr" : "REINA VALERA / REFERÊNCIA  ",
    "description_en" : "BIBLES / Reina Valera / Reference"
},
{
    "code" : "BIB019050",
    "description_ptbr" : "REINA VALERA / ESTUDOS ",
    "description_en" : "BIBLES / Reina Valera / Study"
},
{
    "code" : "BIB019060",
    "description_ptbr" : "REINA VALERA / TEXTO",
    "description_en" : "BIBLES / Reina Valera / Text"
},
{
    "code" : "BIB019070",
    "description_ptbr" : "REINA VALERA / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Reina Valera / Youth & Teen"
},
{
    "code" : "BIB020000",
    "description_ptbr" : "A MENSAGEM /  GERAL ",
    "description_en" : "BIBLES / The Message / General"
},
{
    "code" : "BIB020010",
    "description_ptbr" : "A MENSAGEM / INFANTIL",
    "description_en" : "BIBLES / The Message / Children"
},
{
    "code" : "BIB020020",
    "description_ptbr" : "A MENSAGEM / DEVOCIONAL",
    "description_en" : "BIBLES / The Message / Devotional"
},
{
    "code" : "BIB020030",
    "description_ptbr" : "A MENSAGEM / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / The Message / New Testament & Portions"
},
{
    "code" : "BIB020040",
    "description_ptbr" : "A MENSAGEM / REFERÊNCIA  ",
    "description_en" : "BIBLES / The Message / Reference"
},
{
    "code" : "BIB020050",
    "description_ptbr" : "A MENSAGEM / ESTUDOS ",
    "description_en" : "BIBLES / The Message / Study"
},
{
    "code" : "BIB020060",
    "description_ptbr" : "A MENSAGEM / TEXTO",
    "description_en" : "BIBLES / The Message / Text"
},
{
    "code" : "BIB020070",
    "description_ptbr" : "A MENSAGEM / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / The Message / Youth & Teen"
},
{
    "code" : "BIB021000",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL /  GERAL ",
    "description_en" : "BIBLES / Today's New International Version / General"
},
{
    "code" : "BIB021010",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / INFANTIL",
    "description_en" : "BIBLES / Today's New International Version / Children"
},
{
    "code" : "BIB021020",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / DEVOCIONAL",
    "description_en" : "BIBLES / Today's New International Version / Devotional"
},
{
    "code" : "BIB021030",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / NOVO TESTAMENTO E PORÇÕES",
    "description_en" : "BIBLES / Today's New International Version / New Testament & Portions"
},
{
    "code" : "BIB021040",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / REFERÊNCIA  ",
    "description_en" : "BIBLES / Today's New International Version / Reference"
},
{
    "code" : "BIB021050",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / ESTUDOS ",
    "description_en" : "BIBLES / Today's New International Version / Study"
},
{
    "code" : "BIB021060",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / TEXTO",
    "description_en" : "BIBLES / Today's New International Version / Text"
},
{
    "code" : "BIB021070",
    "description_ptbr" : "NOVA VERSÃO INTERNACIONAL ATUAL / JUVENTUDE & ADOLESCÊNCIA    ",
    "description_en" : "BIBLES / Today's New International Version / Youth & Teen"
},
{
    "code" : "BIB022000",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / GERAL",
    "description_en" : "BIBLES / Common English Bible / General"
},
{
    "code" : "BIB022010",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / INFANTIL",
    "description_en" : "BIBLES / Common English Bible / Children"
},
{
    "code" : "BIB022020",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / DEVOCIONAL",
    "description_en" : "BIBLES / Common English Bible / Devotional"
},
{
    "code" : "BIB022030",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / NOVO TESTAMENTO & PORÇÕES",
    "description_en" : "BIBLES / Common English Bible / New Testament & Portions"
},
{
    "code" : "BIB022040",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / REFERÊNCIA",
    "description_en" : "BIBLES / Common English Bible / Reference"
},
{
    "code" : "BIB022050",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / ESTUDOS",
    "description_en" : "BIBLES / Common English Bible / Study"
},
{
    "code" : "BIB022060",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / TEXTO",
    "description_en" : "BIBLES / Common English Bible / Text"
},
{
    "code" : "BIB022070",
    "description_ptbr" : "BÍBLIA EM INGLÊS COMUM / JUVENTUDE & ADOLESCÊNCIA",
    "description_en" : "BIBLES / Common English Bible / Youth & Teen"
},
{
    "code" : "BIO000000",
    "description_ptbr" : "GERAL",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / General"
},
{
    "code" : "BIO001000",
    "description_ptbr" : "ARTISTAS, ARQUITETOS, FOTÓGRAFOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Artists, Architects, Photographers"
},
{
    "code" : "BIO002000",
    "description_ptbr" : "LEGADO CULTURAL",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Cultural Heritage"
},
{
    "code" : "BIO003000",
    "description_ptbr" : "NEGÓCIOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Business"
},
{
    "code" : "BIO004000",
    "description_ptbr" : "COMPOSITORES & MÚSICOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Composers & Musicians"
},
{
    "code" : "BIO005000",
    "description_ptbr" : "ENTRETENIMENTO & ARTES CÊNICAS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Entertainment & Performing Arts"
},
{
    "code" : "BIO006000",
    "description_ptbr" : "HISTÓRICO",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Historical"
},
{
    "code" : "BIO007000",
    "description_ptbr" : "LITERATURA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Literary"
},
{
    "code" : "BIO008000",
    "description_ptbr" : "MILITAR",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Military"
},
{
    "code" : "BIO009000",
    "description_ptbr" : "FILÓSOFOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Philosophers"
},
{
    "code" : "BIO010000",
    "description_ptbr" : "POLÍTICO",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Political"
},
{
    "code" : "BIO011000",
    "description_ptbr" : "PRESIDENTES & CHEFES DE ESTADO",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Presidents & Heads of State"
},
{
    "code" : "BIO012000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Reference"
},
{
    "code" : "BIO013000",
    "description_ptbr" : "RICOS & FAMOSOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Rich & Famous"
},
{
    "code" : "BIO014000",
    "description_ptbr" : "REALEZA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Royalty"
},
{
    "code" : "BIO015000",
    "description_ptbr" : "CIÊNCIA & TECNOLOGIA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Science & Technology"
},
{
    "code" : "BIO016000",
    "description_ptbr" : "ESPORTES",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Sports"
},
{
    "code" : "BIO017000",
    "description_ptbr" : "MEDICINA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Medical"
},
{
    "code" : "BIO018000",
    "description_ptbr" : "RELIGIOSIDADE",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Religious"
},
{
    "code" : "BIO019000",
    "description_ptbr" : "EDUCADORES",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Educators"
},
{
    "code" : "BIO020000",
    "description_ptbr" : "ADVOGADOS & JUÍZES",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Lawyers & Judges"
},
{
    "code" : "BIO021000",
    "description_ptbr" : "CIENTISTAS SOCIAIS & PSICÓLOGOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Social Scientists & Psychologists"
},
{
    "code" : "BIO022000",
    "description_ptbr" : "MULHERES",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Women"
},
{
    "code" : "BIO023000",
    "description_ptbr" : "AVENTUREIROS & EXPLORADORES",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Adventurers & Explorers"
},
{
    "code" : "BIO024000",
    "description_ptbr" : "CRIMINOSOS & FORAS-DA-LEI",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Criminals & Outlaws"
},
{
    "code" : "BIO025000",
    "description_ptbr" : "EDITORES & JORNALISTAS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Editors, Journalists, Publishers"
},
{
    "code" : "BIO026000",
    "description_ptbr" : "MEMÓRIAS PESSOAIS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Personal Memoirs"
},
{
    "code" : "BIO027000",
    "description_ptbr" : "APLICAÇÃO DA LEI",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Law Enforcement"
},
{
    "code" : "BIO028000",
    "description_ptbr" : "NATIVOS AMERICANOS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Native Americans"
},
{
    "code" : "BIO029000",
    "description_ptbr" : "CULINÁRIA",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Culinary"
},
{
    "code" : "BIO030000",
    "description_ptbr" : "AMBIENTALISTAS & NATURALISTAS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Environmentalists & Naturalists"
},
{
    "code" : "BIO031000",
    "description_ptbr" : "GAYS & LÉSBICAS",
    "description_en" : "BIOGRAPHY & AUTOBIOGRAPHY / Gay & Lesbian"
},
{
    "code" : "BUS000000",
    "description_ptbr" : "GERAL",
    "description_en" : "BUSINESS & ECONOMICS / General"
},
{
    "code" : "BUS001000",
    "description_ptbr" : "CONTABILIDADE / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Accounting/General"
},
{
    "code" : "BUS001010",
    "description_ptbr" : "CONTABILIDADE / FINANCEIRO",
    "description_en" : "BUSINESS & ECONOMICS / Accounting / Financial"
},
{
    "code" : "BUS001020",
    "description_ptbr" : "CONTABILIDADE / GOVERNAMENTAL",
    "description_en" : "BUSINESS & ECONOMICS / Accounting / Governmental"
},
{
    "code" : "BUS001030",
    "description_ptbr" : "INTERNACIONAL / CONTABILIDADE",
    "description_en" : "BUSINESS & ECONOMICS / International / Accounting"
},
{
    "code" : "BUS001040",
    "description_ptbr" : "CONTABILIDADE / GERENCIAL",
    "description_en" : "BUSINESS & ECONOMICS / Accounting / Managerial"
},
{
    "code" : "BUS001050",
    "description_ptbr" : "CONTABILIDADE / PADRÕES",
    "description_en" : "BUSINESS & ECONOMICS / Accounting / Standards (GAAP, IFRS, etc.)"
},
{
    "code" : "BUS002000",
    "description_ptbr" : "PUBLICIDADE & PROMOÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Advertising & Promotion"
},
{
    "code" : "BUS003000",
    "description_ptbr" : "AUDITORIA ",
    "description_en" : "BUSINESS & ECONOMICS / Auditing"
},
{
    "code" : "BUS004000",
    "description_ptbr" : "BANCOS E BANCÁRIOS",
    "description_en" : "BUSINESS & ECONOMICS / Banks & Banking"
},
{
    "code" : "BUS005000",
    "description_ptbr" : "ESCRITURAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Bookkeeping"
},
{
    "code" : "BUS006000",
    "description_ptbr" : "ORÇAMENTÁRIO",
    "description_en" : "BUSINESS & ECONOMICS / Budgeting"
},
{
    "code" : "BUS007000",
    "description_ptbr" : "COMUNICAÇÃO EMPRESARIAL / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Communication / General"
},
{
    "code" : "BUS007010",
    "description_ptbr" : "COMUNICAÇÃO EMPRESARIAL / REUNIÕES E APRESENTAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Business Communication / Meetings & Presentations"
},
{
    "code" : "BUS008000",
    "description_ptbr" : "ÉTICA EMPRESARIAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Ethics"
},
{
    "code" : "BUS009000",
    "description_ptbr" : "ETIQUETA EMPRESARIAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Etiquette"
},
{
    "code" : "BUS010000",
    "description_ptbr" : "DIREITO EMPRESARIAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Law"
},
{
    "code" : "BUS011000",
    "description_ptbr" : "ESCRITA EMPRESARIAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Writing"
},
{
    "code" : "BUS012000",
    "description_ptbr" : "CARREIRAS / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Careers / General"
},
{
    "code" : "BUS012010",
    "description_ptbr" : "CARREIRAS / ESTÁGIOS",
    "description_en" : "BUSINESS & ECONOMICS / Careers / Internships"
},
{
    "code" : "BUS013000",
    "description_ptbr" : "POLÍTICA COMERCIAL",
    "description_en" : "BUSINESS & ECONOMICS / Commercial Policy"
},
{
    "code" : "BUS014000",
    "description_ptbr" : "INVESTIMENTOS & VALORES / MERCADORIAS",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Commodities"
},
{
    "code" : "BUS015000",
    "description_ptbr" : "FUSÕES & AQUISIÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Mergers & Acquisitions"
},
{
    "code" : "BUS016000",
    "description_ptbr" : "HÁBITOS DO CONSUMIDOR",
    "description_en" : "BUSINESS & ECONOMICS / Consumer Behavior"
},
{
    "code" : "BUS017000",
    "description_ptbr" : "FINANÇAS CORPORATIVAS",
    "description_en" : "BUSINESS & ECONOMICS / Corporate Finance"
},
{
    "code" : "BUS018000",
    "description_ptbr" : "RELACIONAMENTO COM O CLIENTE",
    "description_en" : "BUSINESS & ECONOMICS / Customer Relations"
},
{
    "code" : "BUS019000",
    "description_ptbr" : "TOMADA DE DECISÕES & RESOLUÇÃO DE PROBLEMAS",
    "description_en" : "BUSINESS & ECONOMICS / Decision-Making & Problem Solving"
},
{
    "code" : "BUS020000",
    "description_ptbr" : "DESENVOLVIMENTO / DESENVOLVIMENTO CORPORATIVO",
    "description_en" : "BUSINESS & ECONOMICS / Development / Business Development"
},
{
    "code" : "BUS021000",
    "description_ptbr" : "ECONOMETRIA",
    "description_en" : "BUSINESS & ECONOMICS / Econometrics"
},
{
    "code" : "BUS022000",
    "description_ptbr" : "CONDIÇÕES ECONÔMICAS",
    "description_en" : "BUSINESS & ECONOMICS / Economic Conditions"
},
{
    "code" : "BUS023000",
    "description_ptbr" : "HISTÓRIA DA ECONOMIA",
    "description_en" : "BUSINESS & ECONOMICS / Economic History"
},
{
    "code" : "BUS024000",
    "description_ptbr" : "EDUCAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Education"
},
{
    "code" : "BUS025000",
    "description_ptbr" : "EMPREENDEDORISMO",
    "description_en" : "BUSINESS & ECONOMICS / Entrepreneurship"
},
{
    "code" : "BUS026000",
    "description_ptbr" : "EXPORTAÇÃO & IMPORTAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Exports & Imports"
},
{
    "code" : "BUS027000",
    "description_ptbr" : "FINANÇAS",
    "description_en" : "BUSINESS & ECONOMICS / Finance"
},
{
    "code" : "BUS028000",
    "description_ptbr" : "CÂMBIO INTERNACIONAL",
    "description_en" : "BUSINESS & ECONOMICS / Foreign Exchange"
},
{
    "code" : "BUS029000",
    "description_ptbr" : "EMPREENDIMENTOS LIVRES",
    "description_en" : "BUSINESS & ECONOMICS / Free Enterprise"
},
{
    "code" : "BUS030000",
    "description_ptbr" : "RECURSOS HUMANOS & GESTÃO DE PESSOAS",
    "description_en" : "BUSINESS & ECONOMICS / Human Resources & Personnel Management"
},
{
    "code" : "BUS031000",
    "description_ptbr" : "INFLAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Inflation"
},
{
    "code" : "BUS032000",
    "description_ptbr" : "INFRAESTRUTURA",
    "description_en" : "BUSINESS & ECONOMICS / Infrastructure"
},
{
    "code" : "BUS033000",
    "description_ptbr" : "SEGURIDADE / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / General"
},
{
    "code" : "BUS033010",
    "description_ptbr" : "SEGURIDADE / AUTOMÓVEIS",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Automobile"
},
{
    "code" : "BUS033020",
    "description_ptbr" : "SEGURIDADE / DANOS",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Casualty"
},
{
    "code" : "BUS033040",
    "description_ptbr" : "SEGURIDADE / SAÚDE",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Health"
},
{
    "code" : "BUS033050",
    "description_ptbr" : "SEGURIDADE / RESPONSABILIDADE",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Liability"
},
{
    "code" : "BUS033060",
    "description_ptbr" : "SEGURIDADE / VIDA",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Life"
},
{
    "code" : "BUS033070",
    "description_ptbr" : "SEGURIDADE / GERENCIAMENTO & AVALIAÇÃO DE RISCO",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Risk Assessment & Management"
},
{
    "code" : "BUS033080",
    "description_ptbr" : "SEGURIDADE / PROPRIEDADE",
    "description_en" : "BUSINESS & ECONOMICS / Insurance / Property"
},
{
    "code" : "BUS034000",
    "description_ptbr" : "INTERESSE",
    "description_en" : "BUSINESS & ECONOMICS / Interest"
},
{
    "code" : "BUS035000",
    "description_ptbr" : "INTERNACIONAL / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / International / General"
},
{
    "code" : "BUS036000",
    "description_ptbr" : "INVESTIMENTOS & VALORES / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / General"
},
{
    "code" : "BUS036010",
    "description_ptbr" : "INVESTIMENTOS & VALORES / OBRIGAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Bonds"
},
{
    "code" : "BUS036020",
    "description_ptbr" : "INVESTIMENTOS & VALORES / MERCADO A PARZO",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Futures"
},
{
    "code" : "BUS036030",
    "description_ptbr" : "INVESTIMENTOS & VALORES / FUNDOS MÚTUOS",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Mutual Funds"
},
{
    "code" : "BUS036040",
    "description_ptbr" : "INVESTIMENTOS & VALORES / OPÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Options"
},
{
    "code" : "BUS036050",
    "description_ptbr" : "INVESTIMENTOS & VALORES / MERCADO IMOBILIÁRIO",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Real Estate"
},
{
    "code" : "BUS036060",
    "description_ptbr" : "INVESTIMENTOS & VALORES / AÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Investments & Securities / Stocks"
},
{
    "code" : "BUS037020",
    "description_ptbr" : "CARREIRAS / BUSCA DE EMPREGO",
    "description_en" : "BUSINESS & ECONOMICS / Careers / Job Hunting"
},
{
    "code" : "BUS038000",
    "description_ptbr" : "TRABALHO",
    "description_en" : "BUSINESS & ECONOMICS / Labor"
},
{
    "code" : "BUS039000",
    "description_ptbr" : "ECONOMIA / MACROECONOMIA",
    "description_en" : "BUSINESS & ECONOMICS / Economics / Macroeconomics"
},
{
    "code" : "BUS040000",
    "description_ptbr" : "PEDIDOS POR CORREIO",
    "description_en" : "BUSINESS & ECONOMICS / Mail Order"
},
{
    "code" : "BUS041000",
    "description_ptbr" : "GESTÃO",
    "description_en" : "BUSINESS & ECONOMICS / Management"
},
{
    "code" : "BUS042000",
    "description_ptbr" : "CIÊNCIA DA GESTÃO",
    "description_en" : "BUSINESS & ECONOMICS / Management Science"
},
{
    "code" : "BUS043000",
    "description_ptbr" : "MARKETING / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / General"
},
{
    "code" : "BUS043010",
    "description_ptbr" : "MARKETING / DIRETO",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / Direct"
},
{
    "code" : "BUS043020",
    "description_ptbr" : "MARKETING / INDUSTRIAL",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / Industrial"
},
{
    "code" : "BUS043030",
    "description_ptbr" : "INTERNACIONAL / MARKETING",
    "description_en" : "BUSINESS & ECONOMICS / International / Marketing"
},
{
    "code" : "BUS043040",
    "description_ptbr" : "MARKETING / MULTINÍVEL",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / Multilevel"
},
{
    "code" : "BUS043050",
    "description_ptbr" : "MARKETING / TELEMARKETING",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / Telemarketing"
},
{
    "code" : "BUS043060",
    "description_ptbr" : "MARKETING / PESQUISA",
    "description_en" : "BUSINESS & ECONOMICS / Marketing / Research"
},
{
    "code" : "BUS044000",
    "description_ptbr" : "ECONOMIA / MICROECONOMIA",
    "description_en" : "BUSINESS & ECONOMICS / Economics / Microeconomics"
},
{
    "code" : "BUS045000",
    "description_ptbr" : "CAPITAL & POLÍTICA MONETÁRIA",
    "description_en" : "BUSINESS & ECONOMICS / Money & Monetary Policy"
},
{
    "code" : "BUS046000",
    "description_ptbr" : "MOTIVACIONAL",
    "description_en" : "BUSINESS & ECONOMICS / Motivational"
},
{
    "code" : "BUS047000",
    "description_ptbr" : "NEGOCIAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Negotiating"
},
{
    "code" : "BUS048000",
    "description_ptbr" : "NOVAS EMPRESAS DE NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / New Business Enterprises"
},
{
    "code" : "BUS049000",
    "description_ptbr" : "PESQUISA DE OPERAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Operations Research"
},
{
    "code" : "BUS050000",
    "description_ptbr" : "FINANÇAS PESSOAIS / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / General"
},
{
    "code" : "BUS050010",
    "description_ptbr" : "FINANÇAS PESSOAIS / ORÇAMENTOS",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / Budgeting"
},
{
    "code" : "BUS050020",
    "description_ptbr" : "FINANÇAS PESSOAIS / INVESTIMENTOS",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / Investing"
},
{
    "code" : "BUS050030",
    "description_ptbr" : "FINANÇAS PESSOAIS / GESTÃO DE CAPITAL",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / Money Management"
},
{
    "code" : "BUS050040",
    "description_ptbr" : "FINANÇAS PESSOAIS / PLANEJAMENTO DE APOSENTADORIA",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / Retirement Planning"
},
{
    "code" : "BUS050050",
    "description_ptbr" : "FINANÇAS PESSOAIS / TAXAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Personal Finance / Taxation"
},
{
    "code" : "BUS051000",
    "description_ptbr" : "FINANÇAS PÚBLICAS",
    "description_en" : "BUSINESS & ECONOMICS / Public Finance"
},
{
    "code" : "BUS052000",
    "description_ptbr" : "RELAÇÕES PÚBLICAS",
    "description_en" : "BUSINESS & ECONOMICS / Public Relations"
},
{
    "code" : "BUS053000",
    "description_ptbr" : "CONTROLE DE QUALIDADE",
    "description_en" : "BUSINESS & ECONOMICS / Quality Control"
},
{
    "code" : "BUS054000",
    "description_ptbr" : "IMÓVEIS / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Real Estate / General"
},
{
    "code" : "BUS054010",
    "description_ptbr" : "IMÓVEIS / COMPRA E VENDA DE MORADIAS",
    "description_en" : "BUSINESS & ECONOMICS / Real Estate / Buying & Selling Homes"
},
{
    "code" : "BUS054020",
    "description_ptbr" : "IMÓVEIS / COMERCIAL",
    "description_en" : "BUSINESS & ECONOMICS / Real Estate / Commercial"
},
{
    "code" : "BUS054030",
    "description_ptbr" : "IMÓVEIS / HIPOTECAS",
    "description_en" : "BUSINESS & ECONOMICS / Real Estate / Mortgages"
},
{
    "code" : "BUS055000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "BUSINESS & ECONOMICS / Reference"
},
{
    "code" : "BUS056030",
    "description_ptbr" : "CARREIRAS / CURRÍCULOS",
    "description_en" : "BUSINESS & ECONOMICS / Careers / Resumes"
},
{
    "code" : "BUS057000",
    "description_ptbr" : "INDÚSTRIAS / VAREJO",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Retailing"
},
{
    "code" : "BUS058000",
    "description_ptbr" : "VENDAS & COMERCIALIZAÇÃO / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Sales & Selling / General"
},
{
    "code" : "BUS058010",
    "description_ptbr" : "VENDAS & COMERCIALIZAÇÃO / GESTÃO",
    "description_en" : "BUSINESS & ECONOMICS / Sales & Selling / Management"
},
{
    "code" : "BUS059000",
    "description_ptbr" : "APTIDÕES",
    "description_en" : "BUSINESS & ECONOMICS / Skills"
},
{
    "code" : "BUS060000",
    "description_ptbr" : "PEQUENOS NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Small Business"
},
{
    "code" : "BUS061000",
    "description_ptbr" : "ESTATÍSTICAS",
    "description_en" : "BUSINESS & ECONOMICS / Statistics"
},
{
    "code" : "BUS062000",
    "description_ptbr" : "AJUSTES ESTRUTURAIS",
    "description_en" : "BUSINESS & ECONOMICS / Structural Adjustment"
},
{
    "code" : "BUS063000",
    "description_ptbr" : "TREINAMENTO ESTRATÉGICO",
    "description_en" : "BUSINESS & ECONOMICS / Strategic Planning"
},
{
    "code" : "BUS064000",
    "description_ptbr" : "TAXAÇÕES / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Taxation / General"
},
{
    "code" : "BUS064010",
    "description_ptbr" : "TAXAÇÕES / CORPORATIVO",
    "description_en" : "BUSINESS & ECONOMICS / Taxation / Corporate"
},
{
    "code" : "BUS064020",
    "description_ptbr" : "INTERNACIONAL / TAXAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / International / Taxation"
},
{
    "code" : "BUS064030",
    "description_ptbr" : "TAXAÇÕES / PEQUENOS NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Taxation / Small Business"
},
{
    "code" : "BUS065000",
    "description_ptbr" : "GESTÃO PELA QUALIDADE TOTAL",
    "description_en" : "BUSINESS & ECONOMICS / Total Quality Management"
},
{
    "code" : "BUS066000",
    "description_ptbr" : "TREINAMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Training"
},
{
    "code" : "BUS067000",
    "description_ptbr" : "URBANO & REGIONAL",
    "description_en" : "BUSINESS & ECONOMICS / Urban & Regional"
},
{
    "code" : "BUS068000",
    "description_ptbr" : "DESENVOLVIMENTO / DESENVOLVIMENTO ECONÔMICO",
    "description_en" : "BUSINESS & ECONOMICS / Development / Economic Development"
},
{
    "code" : "BUS069000",
    "description_ptbr" : "ECONOMIA / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Economics / General"
},
{
    "code" : "BUS069010",
    "description_ptbr" : "ECONOMIA / COMPARATIVA",
    "description_en" : "BUSINESS & ECONOMICS / Economics / Comparative"
},
{
    "code" : "BUS069020",
    "description_ptbr" : "INTERNACIONAL / ECONOMIA",
    "description_en" : "BUSINESS & ECONOMICS / International / Economics"
},
{
    "code" : "BUS069030",
    "description_ptbr" : "ECONOMIA / TEORIA",
    "description_en" : "BUSINESS & ECONOMICS / Economics / Theory"
},
{
    "code" : "BUS070000",
    "description_ptbr" : "INDÚSTRIAS / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Industries / General"
},
{
    "code" : "BUS070010",
    "description_ptbr" : "INDÚSTRIAS / AGRONEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Agribusiness"
},
{
    "code" : "BUS070020",
    "description_ptbr" : "INDÚSTRIAS / INDÚSTRIA AUTOMOBILÍSTICA",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Automobile Industry"
},
{
    "code" : "BUS070030",
    "description_ptbr" : "INDÚSTRIAS / COMPUTAÇÃO & TECNOLOGIA DA INFORMAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Computers & Information Technology"
},
{
    "code" : "BUS070040",
    "description_ptbr" : "INDÚSTRIAS / ENERGIA",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Energy"
},
{
    "code" : "BUS070050",
    "description_ptbr" : "INDÚSTRIAS / MANUFATURAS",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Manufacturing"
},
{
    "code" : "BUS070060",
    "description_ptbr" : "INDÚSTRIAS / MÍDIA & COMUNICAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Media & Communications"
},
{
    "code" : "BUS070070",
    "description_ptbr" : "INDÚSTRIAS / PARQUES & GESTÃO DE LAZER",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Park & Recreation Management"
},
{
    "code" : "BUS070080",
    "description_ptbr" : "INDÚSTRIAS / SERVIÇO",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Service"
},
{
    "code" : "BUS070090",
    "description_ptbr" : "INDÚSTRIAS / MODA & INDÚSTRIA TÊXTIL",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Fashion & Textile Industry"
},
{
    "code" : "BUS070100",
    "description_ptbr" : "INDÚSTRIAS / TRANSPORTE",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Transportation"
},
{
    "code" : "BUS070110",
    "description_ptbr" : "INDÚSTRIAS / ENTRETERIMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Entertainment"
},
{
    "code" : "BUS070120",
    "description_ptbr" : "INDÚSTRIAS / INDÚSTRIA ALIMENTÍCIA",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Food Industry"
},
{
    "code" : "BUS070130",
    "description_ptbr" : "INDÚSTRIAS / FARMACÊUTICA & BIOTECNOLOGIA ",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Pharmaceutical & Biotechnology"
},
{
    "code" : "BUS070140",
    "description_ptbr" : "INDÚSTRIAS / SERVIÇOS FINANCEIROS",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Financial Services"
},
{
    "code" : "BUS070150",
    "description_ptbr" : "INDÚSTRIAS / EXTRAÇÃO DE RECURSOS NATURAIS",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Natural Resource Extraction"
},
{
    "code" : "BUS071000",
    "description_ptbr" : "LIDERANÇA",
    "description_en" : "BUSINESS & ECONOMICS / Leadership"
},
{
    "code" : "BUS072000",
    "description_ptbr" : "DESENVOLVIMENTO / DESENVOLVIMENTO SUSTENTÁVEL",
    "description_en" : "BUSINESS & ECONOMICS / Development / Sustainable Development"
},
{
    "code" : "BUS073000",
    "description_ptbr" : "COMÉRCIO",
    "description_en" : "BUSINESS & ECONOMICS / Commerce"
},
{
    "code" : "BUS074000",
    "description_ptbr" : "ORGANIZAÇÕES NÃO-GOVERTAMENTAIS & CARIDADES",
    "description_en" : "BUSINESS & ECONOMICS / Nonprofit Organizations & Charities"
},
{
    "code" : "BUS075000",
    "description_ptbr" : "CONSULTORIA",
    "description_en" : "BUSINESS & ECONOMICS / Consulting"
},
{
    "code" : "BUS076000",
    "description_ptbr" : "AQUISIÇÃO & COMPRA",
    "description_en" : "BUSINESS & ECONOMICS / Purchasing & Buying"
},
{
    "code" : "BUS077000",
    "description_ptbr" : "CORPORATIVO & HISTÓRIA DE NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Corporate & Business History"
},
{
    "code" : "BUS078000",
    "description_ptbr" : "DISTRIBUIÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Distribution"
},
{
    "code" : "BUS079000",
    "description_ptbr" : "GOVERNO & NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Government & Business"
},
{
    "code" : "BUS080000",
    "description_ptbr" : "NEGÓCIOS DOMÉSTICOS",
    "description_en" : "BUSINESS & ECONOMICS / Home-Based Businesses"
},
{
    "code" : "BUS081000",
    "description_ptbr" : "INDÚSTRIAS / HOSPITALIDADE, VIAGEM & TURISMO",
    "description_en" : "BUSINESS & ECONOMICS / Industries / Hospitality, Travel & Tourism"
},
{
    "code" : "BUS082000",
    "description_ptbr" : "ADMINISTRAÇÃO INDUSTRIAL",
    "description_en" : "BUSINESS & ECONOMICS / Industrial Management"
},
{
    "code" : "BUS083000",
    "description_ptbr" : "GESTÃO DE INFORMAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Information Management"
},
{
    "code" : "BUS084000",
    "description_ptbr" : "AUTOMATIZAÇÃO DE ESCRITÓRIO",
    "description_en" : "BUSINESS & ECONOMICS / Office Automation"
},
{
    "code" : "BUS085000",
    "description_ptbr" : "COMPORTAMENTO ORGANIZACIONAL",
    "description_en" : "BUSINESS & ECONOMICS / Organizational Behavior"
},
{
    "code" : "BUS086000",
    "description_ptbr" : "PREVISÕES",
    "description_en" : "BUSINESS & ECONOMICS / Forecasting"
},
{
    "code" : "BUS087000",
    "description_ptbr" : "PRODUÇÃO & GERENCIAMENTO DE OPERAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Production & Operations Management"
},
{
    "code" : "BUS088000",
    "description_ptbr" : "ADMINISTRAÇÃO DE TEMPO",
    "description_en" : "BUSINESS & ECONOMICS / Time Management"
},
{
    "code" : "BUS089000",
    "description_ptbr" : "AJUDA A SECRETARIADO & TREINAMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Secretarial Aids & Training"
},
{
    "code" : "BUS090000",
    "description_ptbr" : "E-COMMERCE / GERAL (VER TAMBÉM COMPUTAÇÃO / COMÉRCIO ELETRÔNICO) ",
    "description_en" : "BUSINESS & ECONOMICS / E-Commerce / General"
},
{
    "code" : "BUS090010",
    "description_ptbr" : "E-COMMERCE / MARKETING NA INTERNET",
    "description_en" : "BUSINESS & ECONOMICS / E-Commerce / Internet Marketing"
},
{
    "code" : "BUS090030",
    "description_ptbr" : "E-COMMERCE / COMÉRCIO ONLINE",
    "description_en" : "BUSINESS & ECONOMICS / E-Commerce / Online Trading"
},
{
    "code" : "BUS090040",
    "description_ptbr" : "E-COMMERCE / LEILÕES & PEQUENOS NEGÓCIOS ",
    "description_en" : "BUSINESS & ECONOMICS / E-Commerce / Auctions & Small Business"
},
{
    "code" : "BUS091000",
    "description_ptbr" : "MATEMÁTICA EMPRESARIAL",
    "description_en" : "BUSINESS & ECONOMICS / Business Mathematics"
},
{
    "code" : "BUS092000",
    "description_ptbr" : "DESENVOLVIMENTO / GERAL",
    "description_en" : "BUSINESS & ECONOMICS / Development / General"
},
{
    "code" : "BUS093000",
    "description_ptbr" : "ADMINISTRAÇÃO DE INSTALAÇÕES",
    "description_en" : "BUSINESS & ECONOMICS / Facility Management"
},
{
    "code" : "BUS094000",
    "description_ptbr" : "NEGÓCIOS VERDES",
    "description_en" : "BUSINESS & ECONOMICS / Green Business"
},
{
    "code" : "BUS095000",
    "description_ptbr" : "EQUIPAMENTO DE ESCRITÓRIO E MATERIAIS",
    "description_en" : "BUSINESS & ECONOMICS / Office Equipment & Supplies"
},
{
    "code" : "BUS096000",
    "description_ptbr" : "GESTÃO DE ESCRITÓRIO",
    "description_en" : "BUSINESS & ECONOMICS / Office Management"
},
{
    "code" : "BUS097000",
    "description_ptbr" : "CULTURA DE AMBIENTE DE TRABALHO",
    "description_en" : "BUSINESS & ECONOMICS / Workplace Culture"
},
{
    "code" : "BUS098000",
    "description_ptbr" : "CAPITAL DE CONHECIMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Knowledge Capital"
},
{
    "code" : "BUS099000",
    "description_ptbr" : "ECONOMIA AMBIENTAL",
    "description_en" : "BUSINESS & ECONOMICS / Environmental Economics"
},
{
    "code" : "BUS100000",
    "description_ptbr" : "ADMINISTRAÇÃO DE MUSEU & MUSEOLOGIA",
    "description_en" : "BUSINESS & ECONOMICS / Museum Administration & Museology"
},
{
    "code" : "BUS101000",
    "description_ptbr" : "GERENCIAMENTO DE PROJETOS",
    "description_en" : "BUSINESS & ECONOMICS / Project Management"
},
{
    "code" : "BUS102000",
    "description_ptbr" : "TERCEIRIZAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Outsourcing"
},
{
    "code" : "BUS103000",
    "description_ptbr" : "DESENVOLVIMENTO ORGANIZACIONAL",
    "description_en" : "BUSINESS & ECONOMICS / Organizational Development"
},
{
    "code" : "BUS104000",
    "description_ptbr" : "GOVERNANÇA CORPORATIVA",
    "description_en" : "BUSINESS & ECONOMICS / Corporate Governance"
},
{
    "code" : "BUS105000",
    "description_ptbr" : "FRANQUIAS",
    "description_en" : "BUSINESS & ECONOMICS / Franchises"
},
{
    "code" : "BUS106000",
    "description_ptbr" : "TUTORIA & TREINAMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Mentoring & Coaching"
},
{
    "code" : "BUS107000",
    "description_ptbr" : "SUCESSO PESSOAL",
    "description_en" : "BUSINESS & ECONOMICS / Personal Success"
},
{
    "code" : "BUS108000",
    "description_ptbr" : "PESQUISA & DESENVOLVIMENTO",
    "description_en" : "BUSINESS & ECONOMICS / Research & Development"
},
{
    "code" : "BUS109000",
    "description_ptbr" : "MULHERES EM NEGÓCIOS",
    "description_en" : "BUSINESS & ECONOMICS / Women in Business"
},
{
    "code" : "BUS110000",
    "description_ptbr" : "RESOLUÇÃO DE CONFLITOS & MEDIAÇÃO",
    "description_en" : "BUSINESS & ECONOMICS / Conflict Resolution & Mediation"
},
{
    "code" : "CGN000000",
    "description_ptbr" : "GERAL",
    "description_en" : "COMICS & GRAPHIC NOVELS / General"
},
{
    "code" : "CGN001000",
    "description_ptbr" : "ANTOLOGIAS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Anthologies"
},
{
    "code" : "CGN004010",
    "description_ptbr" : "CRIME & MISTÉRIO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Crime & Mystery"
},
{
    "code" : "CGN004020",
    "description_ptbr" : "ERÓTICOS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Erotica"
},
{
    "code" : "CGN004030",
    "description_ptbr" : "FANTASIA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Fantasy"
},
{
    "code" : "CGN004040",
    "description_ptbr" : "HORROR",
    "description_en" : "COMICS & GRAPHIC NOVELS / Horror"
},
{
    "code" : "CGN004050",
    "description_ptbr" : "MANGÁ / GERAL",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / General"
},
{
    "code" : "CGN004060",
    "description_ptbr" : "PRODUTOS LICENSIADOS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Media Tie-In"
},
{
    "code" : "CGN004070",
    "description_ptbr" : "FICÇÃO CIENTÍFICA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Science Fiction"
},
{
    "code" : "CGN004080",
    "description_ptbr" : "SUPER HERÓIS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Superheroes"
},
{
    "code" : "CGN004090",
    "description_ptbr" : "ROMANCE",
    "description_en" : "COMICS & GRAPHIC NOVELS / Romance"
},
{
    "code" : "CGN004100",
    "description_ptbr" : "MANGÁ / CRIME & MISTÉRIO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Crime & Mystery"
},
{
    "code" : "CGN004110",
    "description_ptbr" : "MANGÁ / ERÓTICOS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Erotica"
},
{
    "code" : "CGN004120",
    "description_ptbr" : "MANGÁ / FANTASIA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Fantasy"
},
{
    "code" : "CGN004130",
    "description_ptbr" : "MANGÁ / GAYS & LÉSBICAS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Gay & Lesbian"
},
{
    "code" : "CGN004140",
    "description_ptbr" : "MANGÁ / FICÇÃO HISTÓRICA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Historical Fiction"
},
{
    "code" : "CGN004150",
    "description_ptbr" : "MANGÁ / HORROR",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Horror"
},
{
    "code" : "CGN004160",
    "description_ptbr" : "MANGÁ / PRODUTOS LICENSIADOS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Media Tie-In"
},
{
    "code" : "CGN004170",
    "description_ptbr" : "MANGÁ / NÃO-FICÇÃO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Nonfiction"
},
{
    "code" : "CGN004180",
    "description_ptbr" : "MANGÁ / ROMANCE",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Romance"
},
{
    "code" : "CGN004190",
    "description_ptbr" : "MANGÁ / FICÇÃO CIENTÍFICA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Science Fiction"
},
{
    "code" : "CGN004200",
    "description_ptbr" : "MANGÁ / ESPORTES",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Sports"
},
{
    "code" : "CGN004210",
    "description_ptbr" : "MANGÁ / YAOI",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Yaoi"
},
{
    "code" : "CGN004220",
    "description_ptbr" : "MANGÁ / RELIGIOSO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Manga / Religious"
},
{
    "code" : "CGN006000",
    "description_ptbr" : "LITERÁRIOS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Literary"
},
{
    "code" : "CGN007000",
    "description_ptbr" : "NÃO-FICÇÃO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Nonfiction"
},
{
    "code" : "CGN008000",
    "description_ptbr" : "MULHER CONTEMPORÂNEA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Contemporary Women"
},
{
    "code" : "CGN009000",
    "description_ptbr" : "GAYS & LÉSBICAS",
    "description_en" : "COMICS & GRAPHIC NOVELS / Gay & Lesbian"
},
{
    "code" : "CGN010000",
    "description_ptbr" : "FICÇÃO HISTÓRICA",
    "description_en" : "COMICS & GRAPHIC NOVELS / Historical Fiction"
},
{
    "code" : "CGN011000",
    "description_ptbr" : "RELIGIOSO",
    "description_en" : "COMICS & GRAPHIC NOVELS / Religious"
},
{
    "code" : "CKB000000",
    "description_ptbr" : "GERAL",
    "description_en" : "COOKING / General"
},
{
    "code" : "CKB001000",
    "description_ptbr" : "REGIONAL & ÉTNICA / AFRICANA",
    "description_en" : "COOKING / Regional & Ethnic / African"
},
{
    "code" : "CKB002000",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / GERAL",
    "description_en" : "COOKING / Regional & Ethnic / American / General"
},
{
    "code" : "CKB002010",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / ESTILO CALIFORNIANO",
    "description_en" : "COOKING / Regional & Ethnic / American / California Style"
},
{
    "code" : "CKB002020",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / MÉDIO ATLÂNTICO",
    "description_en" : "COOKING / Regional & Ethnic / American / Middle Atlantic States"
},
{
    "code" : "CKB002030",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / MEIO OESTE",
    "description_en" : "COOKING / Regional & Ethnic / American / Middle Western States"
},
{
    "code" : "CKB002040",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / NOVA INGLATERRA",
    "description_en" : "COOKING / Regional & Ethnic / American / New England"
},
{
    "code" : "CKB002050",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / NOROESTE",
    "description_en" : "COOKING / Regional & Ethnic / American / Northwestern States"
},
{
    "code" : "CKB002060",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / SUL",
    "description_en" : "COOKING / Regional & Ethnic / American / Southern States"
},
{
    "code" : "CKB002070",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / SUDOESTE",
    "description_en" : "COOKING / Regional & Ethnic / American / Southwestern States"
},
{
    "code" : "CKB002080",
    "description_ptbr" : "REGIONAL & ÉTNICA / NORTE-AMERICANA / OESTE",
    "description_en" : "COOKING / Regional & Ethnic / American / Western States"
},
{
    "code" : "CKB003000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / APERITIVOS",
    "description_en" : "COOKING / Courses & Dishes / Appetizers"
},
{
    "code" : "CKB004000",
    "description_ptbr" : "METÓDOS / ASSADOS",
    "description_en" : "COOKING / Methods / Baking"
},
{
    "code" : "CKB005000",
    "description_ptbr" : "METÓDOS / CHURRASCO & GRELHADOS",
    "description_en" : "COOKING / Methods / Barbecue & Grilling"
},
{
    "code" : "CKB006000",
    "description_ptbr" : "BEBIDAS / BARTENDER",
    "description_en" : "COOKING / Beverages / Bartending"
},
{
    "code" : "CKB007000",
    "description_ptbr" : "BEBIDAS / CERVEJA",
    "description_en" : "COOKING / Beverages / Beer"
},
{
    "code" : "CKB008000",
    "description_ptbr" : "BEBIDAS / SEM ÁLCOOL",
    "description_en" : "COOKING / Beverages / Non-Alcoholic"
},
{
    "code" : "CKB009000",
    "description_ptbr" : "PRATOS & REFEIÇÕES /  PÃO",
    "description_en" : "COOKING / Courses & Dishes / Bread"
},
{
    "code" : "CKB010000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / PRATOS",
    "description_en" : "COOKING / Courses & Dishes / Breakfast"
},
{
    "code" : "CKB011000",
    "description_ptbr" : "REGIONAL & ÉTNICA / INGLESA, ESCOCESA & GALESA",
    "description_en" : "COOKING / Regional & Ethnic / English, Scottish & Welsh"
},
{
    "code" : "CKB012000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / BRUNCH",
    "description_en" : "COOKING / Courses & Dishes / Brunch"
},
{
    "code" : "CKB013000",
    "description_ptbr" : "REGIONAL & ÉTNICA / CAJUN & CRIOULA",
    "description_en" : "COOKING / Regional & Ethnic / Cajun & Creole"
},
{
    "code" : "CKB014000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / BOLOS",
    "description_en" : "COOKING / Courses & Dishes / Cakes"
},
{
    "code" : "CKB015000",
    "description_ptbr" : "METÓDOS / ENLATADOS E CONSERVAS",
    "description_en" : "COOKING / Methods / Canning & Preserving"
},
{
    "code" : "CKB016000",
    "description_ptbr" : "REGIONAL & ÉTNICA / CARIBE & ANTILHAS",
    "description_en" : "COOKING / Regional & Ethnic / Caribbean & West Indian"
},
{
    "code" : "CKB017000",
    "description_ptbr" : "REGIONAL & ÉTNICA / CHINESA",
    "description_en" : "COOKING / Regional & Ethnic / Chinese"
},
{
    "code" : "CKB018000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / CHOCOLATE",
    "description_en" : "COOKING / Courses & Dishes / Chocolate"
},
{
    "code" : "CKB019000",
    "description_ptbr" : "BEBIDAS / CAFÉ & CHÁ",
    "description_en" : "COOKING / Beverages / Coffee & Tea"
},
{
    "code" : "CKB020000",
    "description_ptbr" : "METÓDOS / COZINHANDO PARA UM",
    "description_en" : "COOKING / Methods / Cookery for One"
},
{
    "code" : "CKB021000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / BISCOITOS",
    "description_en" : "COOKING / Courses & Dishes / Cookies"
},
{
    "code" : "CKB023000",
    "description_ptbr" : "METÓDOS / GERAL",
    "description_en" : "COOKING / Methods / General"
},
{
    "code" : "CKB024000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / SOBREMESAS",
    "description_en" : "COOKING / Courses & Dishes / Desserts"
},
{
    "code" : "CKB025000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / DIABETES & DIETÉTICOS",
    "description_en" : "COOKING / Health & Healing / Diabetic & Sugar-Free"
},
{
    "code" : "CKB026000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / CONTROLE DE PESO",
    "description_en" : "COOKING / Health & Healing / Weight Control"
},
{
    "code" : "CKB029000",
    "description_ptbr" : "ENTRETENIMENTO",
    "description_en" : "COOKING / Entertaining"
},
{
    "code" : "CKB030000",
    "description_ptbr" : "ENSAIOS & NARRATIVAS",
    "description_en" : "COOKING / Essays & Narratives"
},
{
    "code" : "CKB031000",
    "description_ptbr" : "REGIONAL & ÉTNICA / GERAL",
    "description_en" : "COOKING / Regional & Ethnic / General"
},
{
    "code" : "CKB032000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / ANIMAIS DE CAÇA",
    "description_en" : "COOKING / Specific Ingredients / Game"
},
{
    "code" : "CKB033000",
    "description_ptbr" : "METÓDOS / GUARNIÇÃO",
    "description_en" : "COOKING / Methods / Garnishing"
},
{
    "code" : "CKB034000",
    "description_ptbr" : "REGIONAL & ÉTNICA / FRANÇA",
    "description_en" : "COOKING / Regional & Ethnic / French"
},
{
    "code" : "CKB035000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / FRUTAS",
    "description_en" : "COOKING / Specific Ingredients / Fruit"
},
{
    "code" : "CKB036000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ALEMÃ",
    "description_en" : "COOKING / Regional & Ethnic / German"
},
{
    "code" : "CKB037000",
    "description_ptbr" : "METÓDOS / GOURMET",
    "description_en" : "COOKING / Methods / Gourmet"
},
{
    "code" : "CKB038000",
    "description_ptbr" : "REGIONAL & ÉTNICA / GREGA",
    "description_en" : "COOKING / Regional & Ethnic / Greek"
},
{
    "code" : "CKB039000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / GERAL",
    "description_en" : "COOKING / Health & Healing / General"
},
{
    "code" : "CKB040000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / ERVAS, TEMPEROS, CONDIMENTOS",
    "description_en" : "COOKING / Specific Ingredients / Herbs, Spices, Condiments"
},
{
    "code" : "CKB041000",
    "description_ptbr" : "HISTÓRIA",
    "description_en" : "COOKING / History"
},
{
    "code" : "CKB042000",
    "description_ptbr" : "DATAS COMEMORATIVAS",
    "description_en" : "COOKING / Holiday"
},
{
    "code" : "CKB043000",
    "description_ptbr" : "REGIONAL & ÉTNICA / HÚNGARA",
    "description_en" : "COOKING / Regional & Ethnic / Hungarian"
},
{
    "code" : "CKB044000",
    "description_ptbr" : "REGIONAL & ÉTNICA / INDIANA & SUL ASIÁTICO",
    "description_en" : "COOKING / Regional & Ethnic / Indian & South Asian"
},
{
    "code" : "CKB045000",
    "description_ptbr" : "REGIONAL & ÉTNICA / INTERNACIONAL",
    "description_en" : "COOKING / Regional & Ethnic / International"
},
{
    "code" : "CKB046000",
    "description_ptbr" : "REGIONAL & ÉTNICA / IRLANDESA",
    "description_en" : "COOKING / Regional & Ethnic / Irish"
},
{
    "code" : "CKB047000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ITALIANA",
    "description_en" : "COOKING / Regional & Ethnic / Italian"
},
{
    "code" : "CKB048000",
    "description_ptbr" : "REGIONAL & ÉTNICA / JAPONESA",
    "description_en" : "COOKING / Regional & Ethnic / Japanese"
},
{
    "code" : "CKB049000",
    "description_ptbr" : "REGIONAL & ÉTNICA / JUDAICA & KOSHER",
    "description_en" : "COOKING / Regional & Ethnic / Jewish & Kosher"
},
{
    "code" : "CKB050000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / BAIXO COLESTEROL",
    "description_en" : "COOKING / Health & Healing / Low Cholesterol"
},
{
    "code" : "CKB051000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / BAIXA GORDURA",
    "description_en" : "COOKING / Health & Healing / Low Fat"
},
{
    "code" : "CKB052000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / BAIXO SÓDIO",
    "description_en" : "COOKING / Health & Healing / Low Salt"
},
{
    "code" : "CKB054000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / CARNE",
    "description_en" : "COOKING / Specific Ingredients / Meat"
},
{
    "code" : "CKB055000",
    "description_ptbr" : "REGIONAL & ÉTNICA / MEDITERRÂNEO",
    "description_en" : "COOKING / Regional & Ethnic / Mediterranean"
},
{
    "code" : "CKB056000",
    "description_ptbr" : "REGIONAL & ÉTNICA / MEXICANA",
    "description_en" : "COOKING / Regional & Ethnic / Mexican"
},
{
    "code" : "CKB057000",
    "description_ptbr" : "METÓDOS / MICRO-ONDAS",
    "description_en" : "COOKING / Methods / Microwave"
},
{
    "code" : "CKB058000",
    "description_ptbr" : "REGIONAL & ÉTNICA / NATIVOS AMERICANOS",
    "description_en" : "COOKING / Regional & Ethnic / Native American"
},
{
    "code" : "CKB059000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / ALIMENTOS ORGÂNICOS",
    "description_en" : "COOKING / Specific Ingredients / Natural Foods"
},
{
    "code" : "CKB060000",
    "description_ptbr" : "METÓDOS / AO AR LIVRE",
    "description_en" : "COOKING / Methods / Outdoor"
},
{
    "code" : "CKB061000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / MASSAS",
    "description_en" : "COOKING / Specific Ingredients / Pasta"
},
{
    "code" : "CKB062000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / MASSAS FOLHADAS",
    "description_en" : "COOKING / Courses & Dishes / Pastry"
},
{
    "code" : "CKB063000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / TORTAS",
    "description_en" : "COOKING / Courses & Dishes / Pies"
},
{
    "code" : "CKB064000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / PIZZA",
    "description_en" : "COOKING / Courses & Dishes / Pizza"
},
{
    "code" : "CKB065000",
    "description_ptbr" : "REGIONAL & ÉTNICA / POLONESA",
    "description_en" : "COOKING / Regional & Ethnic / Polish"
},
{
    "code" : "CKB066000",
    "description_ptbr" : "REGIONAL & ÉTNICA / PORTUGUESA",
    "description_en" : "COOKING / Regional & Ethnic / Portuguese"
},
{
    "code" : "CKB067000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / AVES DOMÉSTICAS",
    "description_en" : "COOKING / Specific Ingredients / Poultry"
},
{
    "code" : "CKB068000",
    "description_ptbr" : "METÓDOS / PROFISSIONAL",
    "description_en" : "COOKING / Methods / Professional"
},
{
    "code" : "CKB069000",
    "description_ptbr" : "METÓDOS / GRANDES QUANTIDADES",
    "description_en" : "COOKING / Methods / Quantity"
},
{
    "code" : "CKB070000",
    "description_ptbr" : "METÓDOS / RÁPIDO & FÁCIL",
    "description_en" : "COOKING / Methods / Quick & Easy"
},
{
    "code" : "CKB071000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "COOKING / Reference"
},
{
    "code" : "CKB072000",
    "description_ptbr" : "REGIONAL & ÉTNICA / RUSSA",
    "description_en" : "COOKING / Regional & Ethnic / Russian"
},
{
    "code" : "CKB073000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / SALADAS",
    "description_en" : "COOKING / Courses & Dishes / Salads"
},
{
    "code" : "CKB074000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ESCANDINAVA",
    "description_en" : "COOKING / Regional & Ethnic / Scandinavian"
},
{
    "code" : "CKB076000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / FRUTOS DO MAR",
    "description_en" : "COOKING / Specific Ingredients / Seafood"
},
{
    "code" : "CKB077000",
    "description_ptbr" : "REGIONAL & ÉTNICA / SAZONAL",
    "description_en" : "COOKING / Seasonal"
},
{
    "code" : "CKB078000",
    "description_ptbr" : "REGIONAL & ÉTNICA / \"\"SOUL FOOD\"\"\"",
    "description_en" : "COOKING / Regional & Ethnic / Soul Food"
},
{
    "code" : "CKB079000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / SOPAS & GUISADOS",
    "description_en" : "COOKING / Courses & Dishes / Soups & Stews"
},
{
    "code" : "CKB080000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ESPANHOLA",
    "description_en" : "COOKING / Regional & Ethnic / Spanish"
},
{
    "code" : "CKB081000",
    "description_ptbr" : "METÓDOS / EQUIPAMENTOS ESPECIAIS",
    "description_en" : "COOKING / Methods / Special Appliances"
},
{
    "code" : "CKB082000",
    "description_ptbr" : "DISPOSIÇÃO DE MESA",
    "description_en" : "COOKING / Tablesetting"
},
{
    "code" : "CKB083000",
    "description_ptbr" : "REGIONAL & ÉTNICA / TAILANDESA",
    "description_en" : "COOKING / Regional & Ethnic / Thai"
},
{
    "code" : "CKB084000",
    "description_ptbr" : "REGIONAL & ÉTNICA / TURCA",
    "description_en" : "COOKING / Regional & Ethnic / Turkish"
},
{
    "code" : "CKB085000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / VEGETAIS",
    "description_en" : "COOKING / Specific Ingredients / Vegetables"
},
{
    "code" : "CKB086000",
    "description_ptbr" : "VEGETARIANA & VEGAN",
    "description_en" : "COOKING / Vegetarian & Vegan"
},
{
    "code" : "CKB088000",
    "description_ptbr" : "BEBIDAS / VINHO & DESTILADOS",
    "description_en" : "COOKING / Beverages / Wine & Spirits"
},
{
    "code" : "CKB089000",
    "description_ptbr" : "METÓDOS / WOK",
    "description_en" : "COOKING / Methods / Wok"
},
{
    "code" : "CKB090000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ASIÁTICA",
    "description_en" : "COOKING / Regional & Ethnic / Asian"
},
{
    "code" : "CKB091000",
    "description_ptbr" : "REGIONAL & ÉTNICA / CANADENSE",
    "description_en" : "COOKING / Regional & Ethnic / Canadian"
},
{
    "code" : "CKB092000",
    "description_ptbr" : "REGIONAL & ÉTNICA / EUROPEIA",
    "description_en" : "COOKING / Regional & Ethnic / European"
},
{
    "code" : "CKB093000",
    "description_ptbr" : "REGIONAL & ÉTNICA / ORIENTE MÉDIO",
    "description_en" : "COOKING / Regional & Ethnic / Middle Eastern"
},
{
    "code" : "CKB094000",
    "description_ptbr" : "REGIONAL & ÉTNICA / VIETNAMITA",
    "description_en" : "COOKING / Regional & Ethnic / Vietnamese"
},
{
    "code" : "CKB095000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / CONFEITARIA",
    "description_en" : "COOKING / Courses & Dishes / Confectionery"
},
{
    "code" : "CKB096000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / LATICÍNIOS",
    "description_en" : "COOKING / Specific Ingredients / Dairy"
},
{
    "code" : "CKB097000",
    "description_ptbr" : "REGIONAL & ÉTNICA / COSTA DO PACÍFICO",
    "description_en" : "COOKING / Regional & Ethnic / Pacific Rim"
},
{
    "code" : "CKB098000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / ARROZ & GRÃOS",
    "description_en" : "COOKING / Specific Ingredients / Rice & Grains"
},
{
    "code" : "CKB099000",
    "description_ptbr" : "REGIONAL & ÉTNICA / AMÉRICA CENTRAL & AMÉRICA DO SUL",
    "description_en" : "COOKING / Regional & Ethnic / Central American & South American"
},
{
    "code" : "CKB100000",
    "description_ptbr" : "BEBIDAS / GERAL",
    "description_en" : "COOKING / Beverages / General"
},
{
    "code" : "CKB101000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / GERAL",
    "description_en" : "COOKING / Courses & Dishes / General"
},
{
    "code" : "CKB102000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / MOLHOS & TEMPEROS",
    "description_en" : "COOKING / Courses & Dishes / Sauces & Dressings"
},
{
    "code" : "CKB103000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / CÂNCER",
    "description_en" : "COOKING / Health & Healing / Cancer"
},
{
    "code" : "CKB104000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / CARDÍACO",
    "description_en" : "COOKING / Health & Healing / Heart"
},
{
    "code" : "CKB105000",
    "description_ptbr" : "INGREDIENTES ESPECÍFICOS / GERAL",
    "description_en" : "COOKING / Specific Ingredients / General"
},
{
    "code" : "CKB106000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / ALERGIA",
    "description_en" : "COOKING / Health & Healing / Allergy"
},
{
    "code" : "CKB107000",
    "description_ptbr" : "COMIDA PARA BEBÊS",
    "description_en" : "COOKING / Baby Food"
},
{
    "code" : "CKB108000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / BAIXO CARBOIDRATO",
    "description_en" : "COOKING / Health & Healing / Low Carbohydrate"
},
{
    "code" : "CKB109000",
    "description_ptbr" : "METÓDOS / COZIMENTO LENTO",
    "description_en" : "COOKING / Methods / Slow Cooking"
},
{
    "code" : "CKB110000",
    "description_ptbr" : "METÓDOS / COMIDA CRUA",
    "description_en" : "COOKING / Methods / Raw Food"
},
{
    "code" : "CKB111000",
    "description_ptbr" : "SAÚDE & TRATAMENTOS / SEM GLÚTEN",
    "description_en" : "COOKING / Health & Healing / Gluten-Free"
},
{
    "code" : "CKB112000",
    "description_ptbr" : "PRATOS & REFEIÇÕES / COZIDOS",
    "description_en" : "COOKING / Courses & Dishes / Casseroles"
},
{
    "code" : "CKB113000",
    "description_ptbr" : "METÓDOS / PRATOS ECONÔMICOS",
    "description_en" : "COOKING / Methods / Low Budget"
},
{
    "code" : "COM000000",
    "description_ptbr" : "GERAL",
    "description_en" : "COMPUTERS / General"
},
{
    "code" : "COM004000",
    "description_ptbr" : "INTELIGÊNCIA ARTIFICAL & SEMÂNTICA",
    "description_en" : "COMPUTERS / Intelligence (AI) & Semantics"
},
{
    "code" : "COM005000",
    "description_ptbr" : "APLICAÇÕES PARA EMPRESA / GERAL",
    "description_en" : "COMPUTERS / Enterprise Applications / General"
},
{
    "code" : "COM005030",
    "description_ptbr" : "APLICAÇÕES PARA EMPRESA / FERRAMENTAS DE INTELIGÊNCIA PARA NEGÓCIOS",
    "description_en" : "COMPUTERS / Enterprise Applications / Business Intelligence Tools"
},
{
    "code" : "COM006000",
    "description_ptbr" : "GUIAS DE COMPRA",
    "description_en" : "COMPUTERS / Buyer's Guides"
},
{
    "code" : "COM007000",
    "description_ptbr" : "CAD-CAM",
    "description_en" : "COMPUTERS / CAD-CAM"
},
{
    "code" : "COM008000",
    "description_ptbr" : "CALCULADORAS",
    "description_en" : "COMPUTERS / Calculators"
},
{
    "code" : "COM009000",
    "description_ptbr" : "TECNOLOGIA DE CD-DVD",
    "description_en" : "COMPUTERS / CD-DVD Technology"
},
{
    "code" : "COM010000",
    "description_ptbr" : "COMPILADORES",
    "description_en" : "COMPUTERS / Compilers"
},
{
    "code" : "COM011000",
    "description_ptbr" : "ARQUITETURA DE SISTEMAS / GERAL",
    "description_en" : "COMPUTERS / Systems Architecture / General"
},
{
    "code" : "COM012000",
    "description_ptbr" : "COMPUTAÇÃO GRÁFICA",
    "description_en" : "COMPUTERS / Computer Graphics"
},
{
    "code" : "COM012040",
    "description_ptbr" : "PROGRAMAÇÃO / JOGOS",
    "description_en" : "COMPUTERS / Programming / Games"
},
{
    "code" : "COM012050",
    "description_ptbr" : "PROCESSAMENTO DE IMAGENS",
    "description_en" : "COMPUTERS / Image Processing"
},
{
    "code" : "COM013000",
    "description_ptbr" : "LITERACIA INFORMÁTICA",
    "description_en" : "COMPUTERS / Computer Literacy"
},
{
    "code" : "COM014000",
    "description_ptbr" : "CIÊNCIA DA COMPUTAÇÃO",
    "description_en" : "COMPUTERS / Computer Science"
},
{
    "code" : "COM015000",
    "description_ptbr" : "SEGURANÇA / VÍRUS & MALWARE",
    "description_en" : "COMPUTERS / Security / Viruses & Malware"
},
{
    "code" : "COM016000",
    "description_ptbr" : "VISÃO COMPUTACIONAL & RECONHECIMENTO DE PADRÕES",
    "description_en" : "COMPUTERS / Computer Vision & Pattern Recognition"
},
{
    "code" : "COM017000",
    "description_ptbr" : "CIBERNÉTICA",
    "description_en" : "COMPUTERS / Cybernetics"
},
{
    "code" : "COM018000",
    "description_ptbr" : "PROCESSAMENTO DE DADOS",
    "description_en" : "COMPUTERS / Data Processing"
},
{
    "code" : "COM019000",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / DESASTRE & REPARO",
    "description_en" : "COMPUTERS / System Administration / Disaster & Recovery"
},
{
    "code" : "COM020000",
    "description_ptbr" : "SISTEMA DE TRANSMISSÃO DE DADOS / GERAL",
    "description_en" : "COMPUTERS / Data Transmission Systems / General"
},
{
    "code" : "COM020010",
    "description_ptbr" : "SISTEMA DE TRANSMISSÃO DE DADOS / INTERCÂMBIO ELETRÔNICO DE DADOS",
    "description_en" : "COMPUTERS / Data Transmission Systems / Electronic Data Interchange"
},
{
    "code" : "COM020020",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / ADMINISTRAÇÃO DE EMAIL",
    "description_en" : "COMPUTERS / System Administration / Email Administration"
},
{
    "code" : "COM020050",
    "description_ptbr" : "SISTEMA DE TRANSMISSÃO DE DADOS / BANDA LARGA",
    "description_en" : "COMPUTERS / Data Transmission Systems / Broadband"
},
{
    "code" : "COM020090",
    "description_ptbr" : "SISTEMA DE TRANSMISSÃO DE DADOS / REDES SEM FIO",
    "description_en" : "COMPUTERS / Data Transmission Systems / Wireless"
},
{
    "code" : "COM021000",
    "description_ptbr" : "BANCOS DE DADOS / GERAL",
    "description_en" : "COMPUTERS / Databases / General"
},
{
    "code" : "COM021030",
    "description_ptbr" : "BANCOS DE DADOS / PROSPECÇÃO DE DADOS",
    "description_en" : "COMPUTERS / Databases / Data Mining"
},
{
    "code" : "COM021040",
    "description_ptbr" : "BANCOS DE DADOS / ARMAZENAMENTO DE DADOS",
    "description_en" : "COMPUTERS / Databases / Data Warehousing"
},
{
    "code" : "COM021050",
    "description_ptbr" : "BANCOS DE DADOS / SERVIDORES",
    "description_en" : "COMPUTERS / Databases / Servers"
},
{
    "code" : "COM022000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / PUBLICAÇÃO DE DESKTOP",
    "description_en" : "COMPUTERS / Desktop Applications / Desktop Publishing"
},
{
    "code" : "COM023000",
    "description_ptbr" : "SOFTWARE EDUCACIONAL",
    "description_en" : "COMPUTERS / Educational Software"
},
{
    "code" : "COM025000",
    "description_ptbr" : "SISTEMAS ESPECIALIZADOS",
    "description_en" : "COMPUTERS / Expert Systems"
},
{
    "code" : "COM027000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / APLICAÇÕES DE FINANÇAS PESSOAIS",
    "description_en" : "COMPUTERS / Desktop Applications / Personal Finance Applications"
},
{
    "code" : "COM030000",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / ARMAZENAMENTO & RECUPERAÇÃO",
    "description_en" : "COMPUTERS / System Administration / Storage & Retrieval"
},
{
    "code" : "COM031000",
    "description_ptbr" : "TEORIA DA INFORMAÇÃO",
    "description_en" : "COMPUTERS / Information Theory"
},
{
    "code" : "COM032000",
    "description_ptbr" : "TECNOLOGIA DA INFORMAÇÃO",
    "description_en" : "COMPUTERS / Information Technology"
},
{
    "code" : "COM034000",
    "description_ptbr" : "INTERATIVA & MULTIMÍDIA",
    "description_en" : "COMPUTERS / Interactive & Multimedia"
},
{
    "code" : "COM035000",
    "description_ptbr" : "TECLADO",
    "description_en" : "COMPUTERS / Keyboarding"
},
{
    "code" : "COM036000",
    "description_ptbr" : "DESIGN DE LÓGICA",
    "description_en" : "COMPUTERS / Logic Design"
},
{
    "code" : "COM037000",
    "description_ptbr" : "TEORIA DE MÁQUINA",
    "description_en" : "COMPUTERS / Machine Theory"
},
{
    "code" : "COM038000",
    "description_ptbr" : "HARDWARE / MAINFRAMES & MINICOMPUTADORES",
    "description_en" : "COMPUTERS / Hardware / Mainframes & Minicomputers"
},
{
    "code" : "COM039000",
    "description_ptbr" : "SISTEMAS DE GESTÃO DE INFORMAÇÃO",
    "description_en" : "COMPUTERS / Management Information Systems"
},
{
    "code" : "COM041000",
    "description_ptbr" : "MICROPROCESSADORES",
    "description_en" : "COMPUTERS / Microprocessors"
},
{
    "code" : "COM042000",
    "description_ptbr" : "PROCESSO DE LINGUAGEM NATURAL",
    "description_en" : "COMPUTERS / Natural Language Processing"
},
{
    "code" : "COM043000",
    "description_ptbr" : "NETWORKING / GERAL",
    "description_en" : "COMPUTERS / Networking / General"
},
{
    "code" : "COM043020",
    "description_ptbr" : "NETWORKING / REDES DE ÁREA LOCAIS (LANS)",
    "description_en" : "COMPUTERS / Networking / Local Area Networks (LANs)"
},
{
    "code" : "COM043040",
    "description_ptbr" : "NETWORKING / PROTOCOLOS DE NETWORK",
    "description_en" : "COMPUTERS / Networking / Network Protocols"
},
{
    "code" : "COM043050",
    "description_ptbr" : "SEGURANÇA / NETWORKING",
    "description_en" : "COMPUTERS / Security / Networking"
},
{
    "code" : "COM043060",
    "description_ptbr" : "NETWORKING / VENDOR SPECIFIC",
    "description_en" : "COMPUTERS / Networking / Vendor Specific"
},
{
    "code" : "COM044000",
    "description_ptbr" : "REDES NEURAIS",
    "description_en" : "COMPUTERS / Neural Networks"
},
{
    "code" : "COM046000",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / GERAL",
    "description_en" : "COMPUTERS / Operating Systems / General"
},
{
    "code" : "COM046020",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / MACINTOSH",
    "description_en" : "COMPUTERS / Operating Systems / Macintosh"
},
{
    "code" : "COM046030",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / UNIX",
    "description_en" : "COMPUTERS / Operating Systems / UNIX"
},
{
    "code" : "COM046040",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / DESKTOP DE WINDOWS",
    "description_en" : "COMPUTERS / Operating Systems / Windows Desktop"
},
{
    "code" : "COM046050",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / SERVIDOR WINDOWS",
    "description_en" : "COMPUTERS / Operating Systems / Windows Server"
},
{
    "code" : "COM046060",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / DOS",
    "description_en" : "COMPUTERS / Operating Systems / DOS"
},
{
    "code" : "COM046070",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / LINUX",
    "description_en" : "COMPUTERS / Operating Systems / Linux"
},
{
    "code" : "COM046080",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / MAINFRAME & MIDRANGE",
    "description_en" : "COMPUTERS / Operating Systems / Mainframe & Midrange"
},
{
    "code" : "COM046090",
    "description_ptbr" : "SISTEMAS OPERACIONAIS / VIRTUALIZAÇÃO",
    "description_en" : "COMPUTERS / Operating Systems / Virtualization"
},
{
    "code" : "COM047000",
    "description_ptbr" : "PROCESSAMENTO DE DADOS ÓPTICO",
    "description_en" : "COMPUTERS / Optical Data Processing"
},
{
    "code" : "COM048000",
    "description_ptbr" : "ARQUITETURA DE SISTEMAS / SISTEMAS DISTRIBUÍDOS & COMPUTAÇÃO",
    "description_en" : "COMPUTERS / Systems Architecture / Distributed Systems & Computing"
},
{
    "code" : "COM049000",
    "description_ptbr" : "HARDWARE / PERIFÉRICOS",
    "description_en" : "COMPUTERS / Hardware / Peripherals"
},
{
    "code" : "COM050000",
    "description_ptbr" : "HARDWARE / COMPUTADORES PESSOAIS / GERAL",
    "description_en" : "COMPUTERS / Hardware / Personal Computers / General"
},
{
    "code" : "COM050010",
    "description_ptbr" : "HARDWARE / COMPUTADORES PESSOAIS / PCS",
    "description_en" : "COMPUTERS / Hardware / Personal Computers / PCs"
},
{
    "code" : "COM050020",
    "description_ptbr" : "HARDWARE / COMPUTADORES PESSOAIS / MACINTOSH",
    "description_en" : "COMPUTERS / Hardware / Personal Computers / Macintosh"
},
{
    "code" : "COM051000",
    "description_ptbr" : "PROGRAMAÇÃO / GERAL",
    "description_en" : "COMPUTERS / Programming / General"
},
{
    "code" : "COM051010",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / GERAL",
    "description_en" : "COMPUTERS / Programming Languages / General"
},
{
    "code" : "COM051020",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / ADA",
    "description_en" : "COMPUTERS / Programming Languages / Ada"
},
{
    "code" : "COM051040",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / LINGUAGEM ASSEMBLY",
    "description_en" : "COMPUTERS / Programming Languages / Assembly Language"
},
{
    "code" : "COM051050",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / BASIC",
    "description_en" : "COMPUTERS / Programming Languages / BASIC"
},
{
    "code" : "COM051060",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / C",
    "description_en" : "COMPUTERS / Programming Languages / C"
},
{
    "code" : "COM051070",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / C++",
    "description_en" : "COMPUTERS / Programming Languages / C++"
},
{
    "code" : "COM051080",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / COBOL",
    "description_en" : "COMPUTERS / Programming Languages / COBOL"
},
{
    "code" : "COM051090",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / FORTRAN",
    "description_en" : "COMPUTERS / Programming Languages / FORTRAN"
},
{
    "code" : "COM051100",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / LISP",
    "description_en" : "COMPUTERS / Programming Languages / LISP"
},
{
    "code" : "COM051130",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / PASCAL",
    "description_en" : "COMPUTERS / Programming Languages / Pascal"
},
{
    "code" : "COM051140",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / PROLOG",
    "description_en" : "COMPUTERS / Programming Languages / Prolog"
},
{
    "code" : "COM051160",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / SMALLTALK",
    "description_en" : "COMPUTERS / Programming Languages / Smalltalk"
},
{
    "code" : "COM051170",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / SQL",
    "description_en" : "COMPUTERS / Programming Languages / SQL"
},
{
    "code" : "COM051200",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / VISUAL BASIC",
    "description_en" : "COMPUTERS / Programming Languages / Visual BASIC"
},
{
    "code" : "COM051210",
    "description_ptbr" : "PROGRAMAÇÃO / ORIENTAÇÃO DE OBJETOS ",
    "description_en" : "COMPUTERS / Programming / Object Oriented"
},
{
    "code" : "COM051220",
    "description_ptbr" : "PROGRAMAÇÃO / PARALELO",
    "description_en" : "COMPUTERS / Programming / Parallel"
},
{
    "code" : "COM051230",
    "description_ptbr" : "DESENVOLVIMENTO & ENGENHARIA DE SOFTWARE / GERAL",
    "description_en" : "COMPUTERS / Software Development & Engineering / General"
},
{
    "code" : "COM051240",
    "description_ptbr" : "DESENVOLVIMENTO & ENGENHARIA DE SOFTWARE / ANÁLISE DE SISTEMA & DESIGN",
    "description_en" : "COMPUTERS / Software Development & Engineering / Systems Analysis & Design"
},
{
    "code" : "COM051260",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / JAVASCRIPT",
    "description_en" : "COMPUTERS / Programming Languages / JavaScript"
},
{
    "code" : "COM051270",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / HTML",
    "description_en" : "COMPUTERS / Programming Languages / HTML"
},
{
    "code" : "COM051280",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / JAVA",
    "description_en" : "COMPUTERS / Programming Languages / Java"
},
{
    "code" : "COM051290",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / RPG",
    "description_en" : "COMPUTERS / Programming Languages / RPG"
},
{
    "code" : "COM051300",
    "description_ptbr" : "PROGRAMAÇÃO / ALGORÍTMOS",
    "description_en" : "COMPUTERS / Programming / Algorithms"
},
{
    "code" : "COM051310",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / C#",
    "description_en" : "COMPUTERS / Programming Languages / C#"
},
{
    "code" : "COM051320",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / XML",
    "description_en" : "COMPUTERS / Programming Languages / XML"
},
{
    "code" : "COM051330",
    "description_ptbr" : "DESENVOLVIMENTO & ENGENHARIA DE SOFTWARE / GARANTIA DE QUALIDADE & TESTE",
    "description_en" : "COMPUTERS / Software Development & Engineering / Quality Assurance & Testing"
},
{
    "code" : "COM051350",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / PERL",
    "description_en" : "COMPUTERS / Programming Languages / Perl"
},
{
    "code" : "COM051360",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / PYTHON",
    "description_en" : "COMPUTERS / Programming Languages / Python"
},
{
    "code" : "COM051370",
    "description_ptbr" : "PROGRAMAÇÃO / MACINTOSH",
    "description_en" : "COMPUTERS / Programming / Macinstosh"
},
{
    "code" : "COM051380",
    "description_ptbr" : "PROGRAMAÇÃO / MICROSOFT",
    "description_en" : "COMPUTERS / Programming / Microsoft"
},
{
    "code" : "COM051390",
    "description_ptbr" : "PROGRAMAÇÃO / OPEN SOURCE",
    "description_en" : "COMPUTERS / Programming / Open Source"
},
{
    "code" : "COM051400",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / PHP",
    "description_en" : "COMPUTERS / Programming Languages / PHP"
},
{
    "code" : "COM051410",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / RUBY",
    "description_en" : "COMPUTERS / Programming Languages / Ruby"
},
{
    "code" : "COM051420",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / VBSCRIPT",
    "description_en" : "COMPUTERS / Programming Languages / VBScript"
},
{
    "code" : "COM051430",
    "description_ptbr" : "DESENVOLVIMENTO & ENGENHARIA DE SOFTWARE / GESTÃO DE PROJETOS",
    "description_en" : "COMPUTERS / Software Development & Engineering / Project Management"
},
{
    "code" : "COM051440",
    "description_ptbr" : "DESENVOLVIMENTO & ENGENHARIA DE SOFTWARE / FERRAMENTAS",
    "description_en" : "COMPUTERS / Software Development & Engineering / Tools"
},
{
    "code" : "COM051450",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / UML",
    "description_en" : "COMPUTERS / Programming Languages / UML"
},
{
    "code" : "COM051460",
    "description_ptbr" : "PROGRAMAÇÃO / DISPOSITIVOS MÓVEIS",
    "description_en" : "COMPUTERS / Programming / Mobile Devices"
},
{
    "code" : "COM051470",
    "description_ptbr" : "LINGUAGENS DE PROGRAMAÇÃO / ASP .NET",
    "description_en" : "COMPUTERS / Programming Languages / ASP .NET"
},
{
    "code" : "COM052000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "COMPUTERS / Reference"
},
{
    "code" : "COM053000",
    "description_ptbr" : "SEGURANÇA / GERAL",
    "description_en" : "COMPUTERS / Security / General"
},
{
    "code" : "COM054000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / PLANILHAS ELETRÔNICAS",
    "description_en" : "COMPUTERS / Desktop Applications / Spreadsheets"
},
{
    "code" : "COM055000",
    "description_ptbr" : "GUIAS DE CERTIFICAÇÃO / GERAL",
    "description_en" : "COMPUTERS / Certification Guides / General"
},
{
    "code" : "COM055010",
    "description_ptbr" : "GUIAS DE CERTIFICAÇÃO / A+",
    "description_en" : "COMPUTERS / Certification Guides / A+"
},
{
    "code" : "COM055020",
    "description_ptbr" : "GUIAS DE CERTIFICAÇÃO / MCSE",
    "description_en" : "COMPUTERS / Certification Guides / MCSE"
},
{
    "code" : "COM056000",
    "description_ptbr" : "UTILIDADES",
    "description_en" : "COMPUTERS / Utilities"
},
{
    "code" : "COM057000",
    "description_ptbr" : "MUNDOS VIRTUAIS",
    "description_en" : "COMPUTERS / Virtual Worlds"
},
{
    "code" : "COM058000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / PROCESSAMENTO DE WORD",
    "description_en" : "COMPUTERS / Desktop Applications / Word Processing"
},
{
    "code" : "COM059000",
    "description_ptbr" : "ENGENHARIA DE COMPUTAÇÃO",
    "description_en" : "COMPUTERS / Computer Engineering"
},
{
    "code" : "COM060000",
    "description_ptbr" : "INTERNET / GERAL",
    "description_en" : "COMPUTERS / Internet / General"
},
{
    "code" : "COM060010",
    "description_ptbr" : "WEB / NAVEGADORES",
    "description_en" : "COMPUTERS / Web / Browsers"
},
{
    "code" : "COM060030",
    "description_ptbr" : "NETWORKING / INTRANETS & EXTRANETS",
    "description_en" : "COMPUTERS / Networking / Intranets & Extranets"
},
{
    "code" : "COM060040",
    "description_ptbr" : "SEGURANÇA / SEGURANÇA ONLINE & PRIVACIDADE",
    "description_en" : "COMPUTERS / Security / Online Safety & Privacy"
},
{
    "code" : "COM060070",
    "description_ptbr" : "WEB / DIRETÓRIOS DE SITE",
    "description_en" : "COMPUTERS / Web / Site Directories"
},
{
    "code" : "COM060080",
    "description_ptbr" : "WEB / GERAL",
    "description_en" : "COMPUTERS / Web / General"
},
{
    "code" : "COM060090",
    "description_ptbr" : "INTERNET / DESENVOLVIMENTO DE APLICATIVOS",
    "description_en" : "COMPUTERS / Internet / Application Development"
},
{
    "code" : "COM060100",
    "description_ptbr" : "WEB / BLOGS",
    "description_en" : "COMPUTERS / Web / Blogs"
},
{
    "code" : "COM060110",
    "description_ptbr" : "WEB / PODCASTING & WEBCASTING",
    "description_en" : "COMPUTERS / Web / Podcasting & Webcasting"
},
{
    "code" : "COM060120",
    "description_ptbr" : "WEB / MECANISMOS DE BUSCA",
    "description_en" : "COMPUTERS / Web / Search Engines"
},
{
    "code" : "COM060130",
    "description_ptbr" : "WEB / DESIGN",
    "description_en" : "COMPUTERS / Web / Design"
},
{
    "code" : "COM060140",
    "description_ptbr" : "WEB / NETWORKING SOCIAL",
    "description_en" : "COMPUTERS / Web / Social Networking"
},
{
    "code" : "COM060150",
    "description_ptbr" : "WEB / CONTEÚDO GERADO POR USUÁRIO",
    "description_en" : "COMPUTERS / Web / User Generated Content"
},
{
    "code" : "COM060160",
    "description_ptbr" : "WEB / PROGRAMAÇÃO PARA WEB",
    "description_en" : "COMPUTERS / Web / Web Programming"
},
{
    "code" : "COM060170",
    "description_ptbr" : "WEB / SISTEMAS DE ADMINISTRAÇÃO DE CONTEÚDO",
    "description_en" : "COMPUTERS / Web / Content Management Systems"
},
{
    "code" : "COM060180",
    "description_ptbr" : "WEB / SERVIÇOS DE WEB & APIS",
    "description_en" : "COMPUTERS / Web / Web Services & APIs"
},
{
    "code" : "COM061000",
    "description_ptbr" : "COMPUTAÇÃO CLIENTE-SERVIDOR",
    "description_en" : "COMPUTERS / Client-Server Computing"
},
{
    "code" : "COM062000",
    "description_ptbr" : "MODELAGEM DE DADOS & DESIG",
    "description_en" : "COMPUTERS / Data Modeling & Design"
},
{
    "code" : "COM063000",
    "description_ptbr" : "GESTÃO DE DOCUMENTOS",
    "description_en" : "COMPUTERS / Document Management"
},
{
    "code" : "COM064000",
    "description_ptbr" : "COMÉRCIO ELETRÔNICO / (VER TAMBÉM ECONOMIA & NEGÓCIOS / E-COMMERCE)",
    "description_en" : "COMPUTERS / Electronic Commerce"
},
{
    "code" : "COM065000",
    "description_ptbr" : "PUBLICAÇÃO ELETRÔNICA",
    "description_en" : "COMPUTERS / Electronic Publishing"
},
{
    "code" : "COM066000",
    "description_ptbr" : "APLICAÇÕES PARA EMPRESA / SOFTWARE DE COLABORAÇÃO",
    "description_en" : "COMPUTERS / Enterprise Applications / Collaboration Software"
},
{
    "code" : "COM067000",
    "description_ptbr" : "HARDWARE / GERAL",
    "description_en" : "COMPUTERS / Hardware / General"
},
{
    "code" : "COM069000",
    "description_ptbr" : "SERVIÇOS ONLINE",
    "description_en" : "COMPUTERS / Online Services"
},
{
    "code" : "COM070000",
    "description_ptbr" : "INTERFACES DE USUÁRIO",
    "description_en" : "COMPUTERS / User Interfaces"
},
{
    "code" : "COM071000",
    "description_ptbr" : "MÍDIA DIGITAL / VÍDEO & ANIMAÇÃO",
    "description_en" : "COMPUTERS / Digital Media / Video & Animation"
},
{
    "code" : "COM072000",
    "description_ptbr" : "SIMULAÇÃO COMPUTACIONAL",
    "description_en" : "COMPUTERS / Computer Simulation"
},
{
    "code" : "COM073000",
    "description_ptbr" : "PROCESSAMENTO DE ÁUDIO & VOZ",
    "description_en" : "COMPUTERS / Speech & Audio Processing"
},
{
    "code" : "COM074000",
    "description_ptbr" : "HARDWARE / DISPOSITIVOS MÓVEIS",
    "description_en" : "COMPUTERS / Hardware / Mobile Devices"
},
{
    "code" : "COM075000",
    "description_ptbr" : "NETWORKING / HARDWARE",
    "description_en" : "COMPUTERS / Networking / Hardware"
},
{
    "code" : "COM077000",
    "description_ptbr" : "SOFTWARE DE ESTATÍSTICA & MATEMÁTICA",
    "description_en" : "COMPUTERS / Mathematical & Statistical Software"
},
{
    "code" : "COM078000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / SOFTWARE DE APRESENTAÇÃO",
    "description_en" : "COMPUTERS / Desktop Applications / Presentation Software"
},
{
    "code" : "COM079000",
    "description_ptbr" : "ASPECTOS SOCIAIS / GERAL",
    "description_en" : "COMPUTERS / Social Aspects / General"
},
{
    "code" : "COM079010",
    "description_ptbr" : "ASPECTOS SOCIAIS / INTERAÇÕES HUMANO-COMPUTADOR",
    "description_en" : "COMPUTERS / Social Aspects / Human-Computer Interaction"
},
{
    "code" : "COM080000",
    "description_ptbr" : "HISTÓRIA",
    "description_en" : "COMPUTERS / History"
},
{
    "code" : "COM081000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / SOFTWARE DE GESTÃO DE PROJETOS",
    "description_en" : "COMPUTERS / Desktop Applications / Project Management Software"
},
{
    "code" : "COM082000",
    "description_ptbr" : "BIOINFORMÁTICA",
    "description_en" : "COMPUTERS / Bioinformatics"
},
{
    "code" : "COM083000",
    "description_ptbr" : "SEGURANÇA / CRIPTOGRAFIA",
    "description_en" : "COMPUTERS / Security / Cryptography"
},
{
    "code" : "COM084000",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / GERAL",
    "description_en" : "COMPUTERS / Desktop Applications / General"
},
{
    "code" : "COM084010",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / BANCOS DE DADOS",
    "description_en" : "COMPUTERS / Desktop Applications / Databases"
},
{
    "code" : "COM084020",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / EMAIL DE CLIENTES",
    "description_en" : "COMPUTERS / Desktop Applications / Email Clients"
},
{
    "code" : "COM084030",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / SUITES",
    "description_en" : "COMPUTERS / Desktop Applications / Suites"
},
{
    "code" : "COM085000",
    "description_ptbr" : "DOCUMENTAÇÃO & ESCRITA TÉCNICA",
    "description_en" : "COMPUTERS / Documentation & Technical Writing"
},
{
    "code" : "COM086000",
    "description_ptbr" : "CASA COMPUTADORIZADA & ENTRETERIMENTO",
    "description_en" : "COMPUTERS / Computerized Home & Entertainment"
},
{
    "code" : "COM087000",
    "description_ptbr" : "MÍDIA DIGITAL / GERAL",
    "description_en" : "COMPUTERS / Digital Media / General"
},
{
    "code" : "COM087010",
    "description_ptbr" : "MÍDIA DIGITAL / ÁUDIO",
    "description_en" : "COMPUTERS / Digital Media / Audio"
},
{
    "code" : "COM087020",
    "description_ptbr" : "APLICAÇÕES DE DESKTOP / DESIGN & GRÁFICOS",
    "description_en" : "COMPUTERS / Desktop Applications / Design & Graphics"
},
{
    "code" : "COM087030",
    "description_ptbr" : "MÍDIA DIGITAL / FOTOGRAFIA (VER TAMBÉM FOTOGRAFIA / TÉCNICAS / DIGITAL)",
    "description_en" : "COMPUTERS / Digital Media / Photography (see alsoPHOTOGRAPHY / Techniques / Digital)"
},
{
    "code" : "COM088000",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / GERAL",
    "description_en" : "COMPUTERS / System Administration / General"
},
{
    "code" : "COM088010",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / ADMINISTRAÇÃO DE LINUX & UNIX",
    "description_en" : "COMPUTERS / System Administration / Linux & UNIX Administration"
},
{
    "code" : "COM088020",
    "description_ptbr" : "ADMINISTRAÇÃO DE SISTEMA / ADMINISTRAÇÃO DE WINDOWS",
    "description_en" : "COMPUTERS / System Administration / Windows Administration"
},
{
    "code" : "COM089000",
    "description_ptbr" : "VISUALIZAÇÃO DE DADOS",
    "description_en" : "COMPUTERS / Data Visualization"
},
{
    "code" : "COM090000",
    "description_ptbr" : "HARDWARE / TABLETS",
    "description_en" : "COMPUTERS / Hardware / Tablets"
},
{
    "code" : "CRA000000",
    "description_ptbr" : "GERAL",
    "description_en" : "CRAFTS & HOBBIES / General"
},
{
    "code" : "CRA001000",
    "description_ptbr" : "APLICAÇÃO",
    "description_en" : "CRAFTS & HOBBIES / Applique"
},
{
    "code" : "CRA002000",
    "description_ptbr" : "CESTAS",
    "description_en" : "CRAFTS & HOBBIES / Baskets"
},
{
    "code" : "CRA003000",
    "description_ptbr" : "TALHAMENTO",
    "description_en" : "CRAFTS & HOBBIES / Carving"
},
{
    "code" : "CRA004000",
    "description_ptbr" : "COM AGULHAS / CROCHÊ",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Crocheting"
},
{
    "code" : "CRA005000",
    "description_ptbr" : "DECORAÇÃO",
    "description_en" : "CRAFTS & HOBBIES / Decorating"
},
{
    "code" : "CRA006000",
    "description_ptbr" : "MASSA",
    "description_en" : "CRAFTS & HOBBIES / Dough"
},
{
    "code" : "CRA007000",
    "description_ptbr" : "TINGIMENTO",
    "description_en" : "CRAFTS & HOBBIES / Dye"
},
{
    "code" : "CRA008000",
    "description_ptbr" : "COM AGULHAS / BORDADO",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Embroidery"
},
{
    "code" : "CRA009000",
    "description_ptbr" : "MODA",
    "description_en" : "CRAFTS & HOBBIES / Fashion"
},
{
    "code" : "CRA010000",
    "description_ptbr" : "ARRANJOS DE FLORES",
    "description_en" : "CRAFTS & HOBBIES / Flower Arranging"
},
{
    "code" : "CRA011000",
    "description_ptbr" : "EMOLDURAMENTO",
    "description_en" : "CRAFTS & HOBBIES / Framing"
},
{
    "code" : "CRA012000",
    "description_ptbr" : "VIDRO & VIDRARIA",
    "description_en" : "CRAFTS & HOBBIES / Glass & Glassware"
},
{
    "code" : "CRA014000",
    "description_ptbr" : "JOALHERIA",
    "description_en" : "CRAFTS & HOBBIES / Jewelry"
},
{
    "code" : "CRA015000",
    "description_ptbr" : "COM AGULHAS / TRICÔ",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Knitting"
},
{
    "code" : "CRA016000",
    "description_ptbr" : "COM AGULHAS / RENDA & ESPIGUILHA",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Lace & Tatting"
},
{
    "code" : "CRA017000",
    "description_ptbr" : "METAL",
    "description_en" : "CRAFTS & HOBBIES / Metal Work"
},
{
    "code" : "CRA018000",
    "description_ptbr" : "MINIATURAS",
    "description_en" : "CRAFTS & HOBBIES / Miniatures"
},
{
    "code" : "CRA019000",
    "description_ptbr" : "MÓBILES",
    "description_en" : "CRAFTS & HOBBIES / Mobiles"
},
{
    "code" : "CRA020000",
    "description_ptbr" : "MODELISMO",
    "description_en" : "CRAFTS & HOBBIES / Models"
},
{
    "code" : "CRA021000",
    "description_ptbr" : "COM AGULHAS / TAPEÇARIA",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Needlepoint"
},
{
    "code" : "CRA022000",
    "description_ptbr" : "COM AGULHAS / GERAL",
    "description_en" : "CRAFTS & HOBBIES / Needlework / General"
},
{
    "code" : "CRA023000",
    "description_ptbr" : "ORIGAMI",
    "description_en" : "CRAFTS & HOBBIES / Origami"
},
{
    "code" : "CRA024000",
    "description_ptbr" : "PINTURA",
    "description_en" : "CRAFTS & HOBBIES / Painting"
},
{
    "code" : "CRA025000",
    "description_ptbr" : "ARTESANATO DE PAPEL",
    "description_en" : "CRAFTS & HOBBIES / Papercrafts"
},
{
    "code" : "CRA026000",
    "description_ptbr" : "PATCHWORK",
    "description_en" : "CRAFTS & HOBBIES / Patchwork"
},
{
    "code" : "CRA027000",
    "description_ptbr" : "POTPOURRI",
    "description_en" : "CRAFTS & HOBBIES / Potpourri"
},
{
    "code" : "CRA028000",
    "description_ptbr" : "OLARIA & CERÂMICA",
    "description_en" : "CRAFTS & HOBBIES / Pottery & Ceramics"
},
{
    "code" : "CRA029000",
    "description_ptbr" : "GRAVURA",
    "description_en" : "CRAFTS & HOBBIES / Printmaking"
},
{
    "code" : "CRA030000",
    "description_ptbr" : "MARIONETES",
    "description_en" : "CRAFTS & HOBBIES / Puppets & Puppetry"
},
{
    "code" : "CRA031000",
    "description_ptbr" : "QUILT",
    "description_en" : "CRAFTS & HOBBIES / Quilts & Quilting"
},
{
    "code" : "CRA032000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "CRAFTS & HOBBIES / Reference"
},
{
    "code" : "CRA033000",
    "description_ptbr" : "TAPETES",
    "description_en" : "CRAFTS & HOBBIES / Rugs"
},
{
    "code" : "CRA034000",
    "description_ptbr" : "SAZONAL",
    "description_en" : "CRAFTS & HOBBIES / Seasonal"
},
{
    "code" : "CRA035000",
    "description_ptbr" : "COSTURA",
    "description_en" : "CRAFTS & HOBBIES / Sewing"
},
{
    "code" : "CRA036000",
    "description_ptbr" : "STENCIL",
    "description_en" : "CRAFTS & HOBBIES / Stenciling"
},
{
    "code" : "CRA037000",
    "description_ptbr" : "BICHOS DE PELÚCIA",
    "description_en" : "CRAFTS & HOBBIES / Stuffed Animals"
},
{
    "code" : "CRA039000",
    "description_ptbr" : "BRINQUEDOS ARTESANAIS",
    "description_en" : "CRAFTS & HOBBIES / Toymaking"
},
{
    "code" : "CRA040000",
    "description_ptbr" : "TECELAGEM",
    "description_en" : "CRAFTS & HOBBIES / Weaving"
},
{
    "code" : "CRA041000",
    "description_ptbr" : "BRINQUEDOS DE MADEIRA",
    "description_en" : "CRAFTS & HOBBIES / Wood Toys"
},
{
    "code" : "CRA042000",
    "description_ptbr" : "ARTESANATO EM MADEIRA",
    "description_en" : "CRAFTS & HOBBIES / Woodwork"
},
{
    "code" : "CRA043000",
    "description_ptbr" : "ARTESANATO PARA CRIANÇAS",
    "description_en" : "CRAFTS & HOBBIES / Crafts for Children"
},
{
    "code" : "CRA044000",
    "description_ptbr" : "COM AGULHAS / PONTO CRUZ",
    "description_en" : "CRAFTS & HOBBIES / Needlework / Cross-Stitch"
},
{
    "code" : "CRA045000",
    "description_ptbr" : "FERROMODELISMO",
    "description_en" : "CRAFTS & HOBBIES / Model Railroading"
},
{
    "code" : "CRA046000",
    "description_ptbr" : "LIVROS E ENCADERNAÇÃO ARTESANAIS",
    "description_en" : "CRAFTS & HOBBIES / Book Printing & Binding"
},
{
    "code" : "CRA047000",
    "description_ptbr" : "ARTESANATO POPULAR",
    "description_en" : "CRAFTS & HOBBIES / Folkcrafts"
},
{
    "code" : "CRA048000",
    "description_ptbr" : "MIÇANGAS",
    "description_en" : "CRAFTS & HOBBIES / Beadwork"
},
{
    "code" : "CRA049000",
    "description_ptbr" : "VELAS & SABONETES",
    "description_en" : "CRAFTS & HOBBIES / Candle & Soap Making"
},
{
    "code" : "CRA050000",
    "description_ptbr" : "COURO",
    "description_en" : "CRAFTS & HOBBIES / Leatherwork"
},
{
    "code" : "CRA051000",
    "description_ptbr" : "MASSA DE POLÍMERO",
    "description_en" : "CRAFTS & HOBBIES / Polymer Clay"
},
{
    "code" : "CRA052000",
    "description_ptbr" : "SCRAPBOOK",
    "description_en" : "CRAFTS & HOBBIES / Scrapbooking"
},
{
    "code" : "CRA053000",
    "description_ptbr" : "ARTESANATO NATURALISTA",
    "description_en" : "CRAFTS & HOBBIES / Nature Crafts"
},
{
    "code" : "CRA054000",
    "description_ptbr" : "MÍDIAS INTEGRADAS",
    "description_en" : "CRAFTS & HOBBIES / Mixed Media"
},
{
    "code" : "CRA055000",
    "description_ptbr" : "NÓS, MACRAMÊ & TRABALHOS COM CORDAS",
    "description_en" : "CRAFTS & HOBBIES / Knots, Macrame & Rope Work"
},
{
    "code" : "CRA056000",
    "description_ptbr" : "CASAS DE BONECAS",
    "description_en" : "CRAFTS & HOBBIES / Dollhouses"
},
{
    "code" : "CRA057000",
    "description_ptbr" : "BONECAS & ROUPAS DE BONECAS",
    "description_en" : "CRAFTS & HOBBIES / Dolls & Doll Clothing"
},
{
    "code" : "DES000000",
    "description_ptbr" : "GERAL",
    "description_en" : "DESIGN / General"
},
{
    "code" : "DES001000",
    "description_ptbr" : "LIVROS",
    "description_en" : "DESIGN / Book"
},
{
    "code" : "DES002000",
    "description_ptbr" : "CLIP-ART",
    "description_en" : "DESIGN / Clip Art"
},
{
    "code" : "DES003000",
    "description_ptbr" : "DECORAÇÃO",
    "description_en" : "DESIGN / Decorative Arts"
},
{
    "code" : "DES004000",
    "description_ptbr" : "ENSAIOS",
    "description_en" : "DESIGN / Essays"
},
{
    "code" : "DES005000",
    "description_ptbr" : "MODA",
    "description_en" : "DESIGN / Fashion"
},
{
    "code" : "DES006000",
    "description_ptbr" : "MOBÍLIA",
    "description_en" : "DESIGN / Furniture"
},
{
    "code" : "DES007000",
    "description_ptbr" : "ARTES GRÁFICAS / GERAL",
    "description_en" : "DESIGN / Graphic Arts / General"
},
{
    "code" : "DES007010",
    "description_ptbr" : "ARTES GRÁFICAS / PROPAGANDA",
    "description_en" : "DESIGN / Graphic Arts / Advertising"
},
{
    "code" : "DES007020",
    "description_ptbr" : "ARTES GRÁFICAS / MARCAS & LOGOS",
    "description_en" : "DESIGN / Graphic Arts / Branding & Logo Design"
},
{
    "code" : "DES007030",
    "description_ptbr" : "ARTES GRÁFICAS / COMERCIAL & CORPORATIVA",
    "description_en" : "DESIGN / Graphic Arts / Commercial & Corporate"
},
{
    "code" : "DES007040",
    "description_ptbr" : "ARTES GRÁFICAS / ILUSTRAÇÃO",
    "description_en" : "DESIGN / Graphic Arts / Illustration"
},
{
    "code" : "DES007050",
    "description_ptbr" : "ARTES GRÁFICAS / TIPOGRAFIA",
    "description_en" : "DESIGN / Graphic Arts / Typography"
},
{
    "code" : "DES008000",
    "description_ptbr" : "HISTÓRIA & CRÍTICA",
    "description_en" : "DESIGN / History & Criticism"
},
{
    "code" : "DES009000",
    "description_ptbr" : "INDUSTRIAL",
    "description_en" : "DESIGN / Industrial"
},
{
    "code" : "DES010000",
    "description_ptbr" : "DECORAÇÃO DE INTERIORES",
    "description_en" : "DESIGN / Interior Decorating"
},
{
    "code" : "DES011000",
    "description_ptbr" : "PRODUTOS",
    "description_en" : "DESIGN / Product"
},
{
    "code" : "DES012000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "DESIGN / Reference"
},
{
    "code" : "DES013000",
    "description_ptbr" : "TÊXTEIS & TRAJES",
    "description_en" : "DESIGN / Textile & Costume"
},
{
    "code" : "DRA000000",
    "description_ptbr" : "GERAL",
    "description_en" : "DRAMA / General"
},
{
    "code" : "DRA001000",
    "description_ptbr" : "NORTE-AMERICANO / GERAL",
    "description_en" : "DRAMA / American / General"
},
{
    "code" : "DRA001010",
    "description_ptbr" : "NORTE-AMERICANO / AFROAMERICANO",
    "description_en" : "DRAMA / American / African American"
},
{
    "code" : "DRA002000",
    "description_ptbr" : "ANTOLOGIAS (MÚLTIPLOS ATORES)",
    "description_en" : "DRAMA / Anthologies (multiple authors)"
},
{
    "code" : "DRA003000",
    "description_ptbr" : "EUROPEU / INGLÊS, IRLANDÊS, ESCOCÊS, GALÊS",
    "description_en" : "DRAMA / European / English, Irish, Scottish, Welsh"
},
{
    "code" : "DRA004000",
    "description_ptbr" : "EUROPEU / GERAL",
    "description_en" : "DRAMA / European / General"
},
{
    "code" : "DRA004010",
    "description_ptbr" : "EUROPEU / FRANCÊS",
    "description_en" : "DRAMA / European / French"
},
{
    "code" : "DRA004020",
    "description_ptbr" : "EUROPEU / ALEMÃO",
    "description_en" : "DRAMA / European / German"
},
{
    "code" : "DRA004030",
    "description_ptbr" : "EUROPEU / ITALIANO",
    "description_en" : "DRAMA / European / Italian"
},
{
    "code" : "DRA004040",
    "description_ptbr" : "EUROPEU / ESPANHOL & PORTUGUÊS",
    "description_en" : "DRAMA / European / Spanish & Portuguese"
},
{
    "code" : "DRA005000",
    "description_ptbr" : "ASIÁTICO / GERAL",
    "description_en" : "DRAMA / Asian / General"
},
{
    "code" : "DRA005010",
    "description_ptbr" : "ASIÁTICO / JAPONÊS",
    "description_en" : "DRAMA / Asian / Japanese"
},
{
    "code" : "DRA006000",
    "description_ptbr" : "ANTIGUIDADE & CLÁSSICO",
    "description_en" : "DRAMA / Ancient & Classical"
},
{
    "code" : "DRA008000",
    "description_ptbr" : "RELIGIOSO & LITÚRGICO",
    "description_en" : "DRAMA / Religious & Liturgical"
},
{
    "code" : "DRA010000",
    "description_ptbr" : "SHAKESPEARE",
    "description_en" : "DRAMA / Shakespeare"
},
{
    "code" : "DRA011000",
    "description_ptbr" : "AFRICANO",
    "description_en" : "DRAMA / African"
},
{
    "code" : "DRA012000",
    "description_ptbr" : "AUSTRÁLIA & OCEANIA",
    "description_en" : "DRAMA / Australian & Oceanian"
},
{
    "code" : "DRA013000",
    "description_ptbr" : "CANADENSE",
    "description_en" : "DRAMA / Canadian"
},
{
    "code" : "DRA014000",
    "description_ptbr" : "CARIBE & AMÉRICA LATINA",
    "description_en" : "DRAMA / Caribbean & Latin American"
},
{
    "code" : "DRA015000",
    "description_ptbr" : "ORIENTE MÉDIO",
    "description_en" : "DRAMA / Middle Eastern"
},
{
    "code" : "DRA016000",
    "description_ptbr" : "RUSSO & ANTIGA UNIÃO SOVIÉTICA",
    "description_en" : "DRAMA / Russian & Former Soviet Union"
},
{
    "code" : "DRA017000",
    "description_ptbr" : "GAY & LÉSBICO",
    "description_en" : "DRAMA / Gay & Lesbian"
},
{
    "code" : "DRA018000",
    "description_ptbr" : "MEDIEVAL",
    "description_en" : "DRAMA / Medieval"
},
{
    "code" : "DRA019000",
    "description_ptbr" : "AUTORAS MULHERES",
    "description_en" : "DRAMA / Women Authors"
},
{
    "code" : "EDU000000",
    "description_ptbr" : "GERAL",
    "description_en" : "EDUCATION / General"
},
{
    "code" : "EDU001000",
    "description_ptbr" : "ADMINISTRAÇÃO / GERAL",
    "description_en" : "EDUCATION / Administration / General"
},
{
    "code" : "EDU001010",
    "description_ptbr" : "ADMINISTRAÇÃO / GESTÃO DE INSTALAÇÕES",
    "description_en" : "EDUCATION / Administration / Facility Management"
},
{
    "code" : "EDU001020",
    "description_ptbr" : "ADMINISTRAÇÃO / ENSINO FUNDAMENTAL & MÉDIO",
    "description_en" : "EDUCATION / Administration / Elementary & Secondary"
},
{
    "code" : "EDU001030",
    "description_ptbr" : "ADMINISTRAÇÃO / ENSINO SUPERIOR",
    "description_en" : "EDUCATION / Administration / Higher"
},
{
    "code" : "EDU001040",
    "description_ptbr" : "ADMINISTRAÇÃO / SUPERINTENDENTES DA ESCOLA E DIRETORES",
    "description_en" : "EDUCATION / Administration / School Superintendents & Principals"
},
{
    "code" : "EDU002000",
    "description_ptbr" : "EDUCAÇÃO DE JOVENS & ADULTOS",
    "description_en" : "EDUCATION / Adult & Continuing Education"
},
{
    "code" : "EDU003000",
    "description_ptbr" : "METAS & OBJETIVOS",
    "description_en" : "EDUCATION / Aims & Objectives"
},
{
    "code" : "EDU005000",
    "description_ptbr" : "EDUCAÇÃO BILÍNGUE",
    "description_en" : "EDUCATION / Bilingual Education"
},
{
    "code" : "EDU006000",
    "description_ptbr" : "ACONSELHAMENTO / GERAL",
    "description_en" : "EDUCATION / Counseling / General"
},
{
    "code" : "EDU007000",
    "description_ptbr" : "CURRÍCULOS",
    "description_en" : "EDUCATION / Curricula"
},
{
    "code" : "EDU008000",
    "description_ptbr" : "TOMADA DE DECISÕES & RESOLUÇÃO DE PROBLEMAS",
    "description_en" : "EDUCATION / Decision-Making & Problem Solving"
},
{
    "code" : "EDU009000",
    "description_ptbr" : "PSICOPEDAGOGIA",
    "description_en" : "EDUCATION / Educational Psychology"
},
{
    "code" : "EDU010000",
    "description_ptbr" : "ENSINO FUNDAMENTAL",
    "description_en" : "EDUCATION / Elementary"
},
{
    "code" : "EDU011000",
    "description_ptbr" : "AVALIAÇÕES",
    "description_en" : "EDUCATION / Evaluation & Assessment"
},
{
    "code" : "EDU012000",
    "description_ptbr" : "MÉTODOS EXPERIMENTAIS",
    "description_en" : "EDUCATION / Experimental Methods"
},
{
    "code" : "EDU013000",
    "description_ptbr" : "FINANCIAMENTO OU AUXÍLIO DE ESTUDOS / AUXÍLIO FINANCEIRO",
    "description_en" : "EDUCATION / Finance"
},
{
    "code" : "EDU014000",
    "description_ptbr" : "ACONSELHAMENTO / DESENVOLVIMENTO ACADÊMICO",
    "description_en" : "EDUCATION / Counseling / Academic Development"
},
{
    "code" : "EDU015000",
    "description_ptbr" : "ENSINO SUPERIOR",
    "description_en" : "EDUCATION / Higher"
},
{
    "code" : "EDU016000",
    "description_ptbr" : "HISTÓRIA",
    "description_en" : "EDUCATION / History"
},
{
    "code" : "EDU017000",
    "description_ptbr" : "ENSINO EM CASA",
    "description_en" : "EDUCATION / Home Schooling"
},
{
    "code" : "EDU018000",
    "description_ptbr" : "ABORDAGEM DE EXPERIÊNCIAS EM LINGUAGEM",
    "description_en" : "EDUCATION / Language Experience Approach"
},
{
    "code" : "EDU020000",
    "description_ptbr" : "EDUCAÇÃO MULTICULTURAL",
    "description_en" : "EDUCATION / Multicultural Education"
},
{
    "code" : "EDU021000",
    "description_ptbr" : "EDUCAÇÃO NÃO-FORMAL",
    "description_en" : "EDUCATION / Non-Formal Education"
},
{
    "code" : "EDU022000",
    "description_ptbr" : "PARTICIPAÇÃO DA FAMÍLIA",
    "description_en" : "EDUCATION / Parent Participation"
},
{
    "code" : "EDU023000",
    "description_ptbr" : "PRÉ-ESCOLA & CRECHE",
    "description_en" : "EDUCATION / Preschool & Kindergarten"
},
{
    "code" : "EDU024000",
    "description_ptbr" : "REFERÊNCIA",
    "description_en" : "EDUCATION / Reference"
},
{
    "code" : "EDU025000",
    "description_ptbr" : "ENSINO MÉDIO",
    "description_en" : "EDUCATION / Secondary"
},
{
    "code" : "EDU026000",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / GERAL",
    "description_en" : "EDUCATION / Special Education / General"
},
{
    "code" : "EDU026010",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / PROBLEMAS DE COMUNICAÇÃO",
    "description_en" : "EDUCATION / Special Education / Communicative Disorders"
},
{
    "code" : "EDU026020",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / PROBLEMAS DE APRENDIZADO",
    "description_en" : "EDUCATION / Special Education / Learning Disabilities"
},
{
    "code" : "EDU026030",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / DEFICIÊNCIAS MENTAIS",
    "description_en" : "EDUCATION / Special Education / Mental Disabilities"
},
{
    "code" : "EDU026040",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / DEFICIÊNCIAS FÍSICAS",
    "description_en" : "EDUCATION / Special Education / Physical Disabilities"
},
{
    "code" : "EDU026050",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / DEFICIÊNCIAS SOCIAIS",
    "description_en" : "EDUCATION / Special Education / Social Disabilities"
},
{
    "code" : "EDU026060",
    "description_ptbr" : "EDUCAÇÃO ESPECIAL / SUPERDOTADOS",
    "description_en" : "EDUCATION / Special Education / Gifted"
},
{
    "code" : "EDU027000",
    "description_ptbr" : "ESTATÍSTICAS",
    "description_en" : "EDUCATION / Statistics"
},
{
    "code" : "EDU028000",
    "description_ptbr" : "TÉCNICAS DE ESTUDO",
    "description_en" : "EDUCATION / Study Skills"
},
{
    "code" : "EDU029000",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / GERAL",
    "description_en" : "EDUCATION / Teaching Methods & Materials / General"
},
{
    "code" : "EDU029010",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / MATEMÁTICA",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Mathematics"
},
{
    "code" : "EDU029020",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / LEITURA & FONÉTICA",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Reading & Phonics"
},
{
    "code" : "EDU029030",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / CIÊNCIA & TECNOLOGIA",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Science & Technology"
},
{
    "code" : "EDU029040",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / CIÊNCIAS SOCIAIS",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Social Science"
},
{
    "code" : "EDU029050",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / ARTES & CIÊNCIAS HUMANAS",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Arts & Humanities"
},
{
    "code" : "EDU029060",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / MÉTODOS DE PESQUISA",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Library Skills"
},
{
    "code" : "EDU029070",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / SAÚDE & SEXUALIDADE",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Health & Sexuality"
},
{
    "code" : "EDU029080",
    "description_ptbr" : "MÉTODOS DE ENSINO & MATERIAIS / LINGUAGENS",
    "description_en" : "EDUCATION / Teaching Methods & Materials / Language Arts"
},
{
    "code" : "EDU030000",
    "description_ptbr" : "TESTES & MEDIÇÕES",
    "description_en" : "EDUCATION / Testing & Measurement"
}
]
EOF;
    
        $aux = json_decode($aux, TRUE);

        foreach ($aux as $bisac)
           self::$bisac[$bisac['code']] = $bisac['description_ptbr'];
        
        $aux = <<<EOF
[
    {
        "code" : "000",
        "description_ptbr" : "CIÊNCIA DA COMPUTAÇÃO, INFORMAÇÃO, OBRAS GERAIS"
    },
    {
        "code" : "010",
        "description_ptbr" : "BIBLIOGRAFIA"
    },
    {
        "code" : "020",
        "description_ptbr" : "BIBLIOTECONOMIA E CIÊNCIA DA INFORMAÇÃO"
    },
    {
        "code" : "028.5",
        "description_ptbr" : "LITERATURA INFANTO-JUVENIL"
    },
    {
        "code" : "030",
        "description_ptbr" : "ENCICLOPÉDIAS GERAIS"
    },
    {
        "code" : "050",
        "description_ptbr" : "PERIÓDICOS"
    },
    {
        "code" : "060",
        "description_ptbr" : "SOCIEDADES, ORGANIZAÇÕES E MUSEOLOGIA"
    },
    {
        "code" : "070",
        "description_ptbr" : "JORNALISMO, EDITORAÇÃO, IMPRENSA DOCUMENTÁRIA E EDUCATIVA"
    },
    {
        "code" : "080",
        "description_ptbr" : "COLEÇÕES DE OBRAS DIVERSAS SEM ASSUNTO ESPECÍFICO"
    },
    {
        "code" : "090",
        "description_ptbr" : "MANUSCRITOS, OBRAS RARAS E OUTROS MATERIAIS RAROS IMPRESSOS"
    },
    {
        "code" : "100",
        "description_ptbr" : "FILOSOFIA E PSICOLOGIA"
    },
    {
        "code" : "110",
        "description_ptbr" : "METAFÍSICA"
    },
    {
        "code" : "120",
        "description_ptbr" : "TEORIA DO CONHECIMENTO, CAUSALIDADE E SER HUMANO"
    },
    {
        "code" : "130",
        "description_ptbr" : "PARAPSICOLOGIA, OCULTISMO E ESPIRITISMO"
    },
    {
        "code" : "140",
        "description_ptbr" : "ESCOLAS FILOSÓFICAS ESPECÍFICAS"
    },
    {
        "code" : "150",
        "description_ptbr" : "PSICOLOGIA"
    },
    {
        "code" : "160",
        "description_ptbr" : "LÓGICA"
    },
    {
        "code" : "170",
        "description_ptbr" : "ÉTICA"
    },
    {
        "code" : "180",
        "description_ptbr" : "FILOSOFIA ANTIGA, MEDIEVAL E ORIENTAL"
    },
    {
        "code" : "190",
        "description_ptbr" : "FILOSOFIA MODERNA OCIDENTAL"
    },
    {
        "code" : "200",
        "description_ptbr" : "RELIGIÃO"
    },
    {
        "code" : "210",
        "description_ptbr" : "FILOSOFIA E TEORIA DA RELIGIÃO"
    },
    {
        "code" : "220",
        "description_ptbr" : "BÍBLIA"
    },
    {
        "code" : "230",
        "description_ptbr" : "CRISTIANISMO"
    },
    {
        "code" : "240",
        "description_ptbr" : "MORAL CRISTÃ E TEOLOGIA DEVOCIONAL"
    },
    {
        "code" : "250",
        "description_ptbr" : "CONGREGAÇÕES CRISTÃS, PRÁTICA E TEOLOGIA PASTORAL"
    },
    {
        "code" : "260",
        "description_ptbr" : "TEOLOGIA SOCIAL E ECLESIÁSTICA CRISTÃ"
    },
    {
        "code" : "270",
        "description_ptbr" : "HISTÓRIA DO CRISTIANISMO"
    },
    {
        "code" : "280",
        "description_ptbr" : "DENOMINAÇÕES E SEITAS CRISTÃS"
    },
    {
        "code" : "290",
        "description_ptbr" : "OUTRAS RELIGIÕES"
    },
    {
        "code" : "300",
        "description_ptbr" : "CIÊNCIAS SOCIAIS"
    },
    {
        "code" : "310",
        "description_ptbr" : "COLEÇÕES DE ESTATÍSTICAS GERAIS"
    },
    {
        "code" : "320",
        "description_ptbr" : "CIÊNCIA POLÍTICA"
    },
    {
        "code" : "330",
        "description_ptbr" : "ECONOMIA"
    },
    {
        "code" : "340",
        "description_ptbr" : "DIREITO"
    },
    {
        "code" : "350",
        "description_ptbr" : "ADMINISTRAÇÃO PÚBLICA E CIÊNCIA MILITAR"
    },
    {
        "code" : "360",
        "description_ptbr" : "SERVIÇOS E PROBLEMAS SOCIAIS / ASSOCIAÇÕES"
    },
    {
        "code" : "370",
        "description_ptbr" : "EDUCAÇÃO"
    },
    {
        "code" : "380",
        "description_ptbr" : "COMÉRCIO, COMUNICAÇÕES E TRANSPORTE"
    },
    {
        "code" : "390",
        "description_ptbr" : "USOS E COSTUMES, ETIQUETA E FOLCLORE"
    },
    {
        "code" : "400",
        "description_ptbr" : "LINGUAGEM E LÍNGUAS"
    },
    {
        "code" : "403",
        "description_ptbr" : "DICIONÁRIOS E ENCICLOPÉDIAS"
    },
    {
        "code" : "410",
        "description_ptbr" : "LINGÜÍSTICA"
    },
    {
        "code" : "420",
        "description_ptbr" : "LÍNGUA INGLESA"
    },
    {
        "code" : "430",
        "description_ptbr" : "LÍNGUA ALEMÃ"
    },
    {
        "code" : "440",
        "description_ptbr" : "LÍNGUA FRANCESA"
    },
    {
        "code" : "450",
        "description_ptbr" : "LÍNGUA ITALIANA"
    },
    {
        "code" : "460",
        "description_ptbr" : "LÍNGUA ESPANHOLA"
    },
    {
        "code" : "469",
        "description_ptbr" : "LÍNGUA PORTUGUESA"
    },
    {
        "code" : "470",
        "description_ptbr" : "LÍNGUA LATINA"
    },
    {
        "code" : "480",
        "description_ptbr" : "LÍNGUA GREGA CLÁSSICA E MODERNA"
    },
    {
        "code" : "490",
        "description_ptbr" : "OUTRAS LÍNGUAS"
    },
    {
        "code" : "500",
        "description_ptbr" : "CIÊNCIAS NATURAIS"
    },
    {
        "code" : "510",
        "description_ptbr" : "MATEMÁTICA"
    },
    {
        "code" : "520",
        "description_ptbr" : "ASTRONOMIA E CIÊNCIAS AFINS"
    },
    {
        "code" : "530",
        "description_ptbr" : "FÍSICA"
    },
    {
        "code" : "540",
        "description_ptbr" : "QUÍMICA E CIÊNCIAS AFINS"
    },
    {
        "code" : "550",
        "description_ptbr" : "GEOCIÊNCIAS / CIÊNCIAS DA TERRA"
    },
    {
        "code" : "560",
        "description_ptbr" : "PALEONTOLOGIA, PALEOZOOLOGIA"
    },
    {
        "code" : "570",
        "description_ptbr" : "BIOLOGIA, CIÊNCIAS DA VIDA"
    },
    {
        "code" : "580",
        "description_ptbr" : "PLANTAS (BOTÂNICA)"
    },
    {
        "code" : "590",
        "description_ptbr" : "ANIMAIS (ZOOLOGIA)"
    },
    {
        "code" : "600",
        "description_ptbr" : "TECNOLOGIA (CIÊNCIAS APLICADAS)"
    },
    {
        "code" : "602",
        "description_ptbr" : "TECNOLOGIA - MISCELÂNIA"
    },
    {
        "code" : "610",
        "description_ptbr" : "MEDICINA E SAÚDE"
    },
    {
        "code" : "620",
        "description_ptbr" : "ENGENHARIA"
    },
    {
        "code" : "630",
        "description_ptbr" : "AGRICULTURA E TECNOLOGIAS RELACIONADAS"
    },
    {
        "code" : "640",
        "description_ptbr" : "ECONOMIA DOMÉSTICA / ADMINISTRAÇÃO DA FAMÍLIA E DO LAR"
    },
    {
        "code" : "641.5",
        "description_ptbr" : "CULINÁRIA"
    },
    {
        "code" : "650",
        "description_ptbr" : "ADMINISTRAÇÃO E SERVIÇOS AUXILIARES"
    },
    {
        "code" : "657",
        "description_ptbr" : "CONTABILIDADE"
    },
    {
        "code" : "660",
        "description_ptbr" : "ENGENHARIA QUÍMICA E TECNOLOGIAS RELACIONADAS"
    },
    {
        "code" : "670",
        "description_ptbr" : "PRODUTOS MANUFATURADOS"
    },
    {
        "code" : "680",
        "description_ptbr" : "MANUFATURA PARA USOS ESPECÍFICOS"
    },
    {
        "code" : "690",
        "description_ptbr" : "CONSTRUÇÕES"
    },
    {
        "code" : "700",
        "description_ptbr" : "ARTES"
    },
    {
        "code" : "710",
        "description_ptbr" : "PLANEJAMENTO URBANO E PAISAGISMO"
    },
    {
        "code" : "720",
        "description_ptbr" : "ARQUITETURA"
    },
    {
        "code" : "730",
        "description_ptbr" : "ARTES PLÁSTICAS / ESCULTURA"
    },
    {
        "code" : "740",
        "description_ptbr" : "DESENHO E ARTES DECORATIVAS"
    },
    {
        "code" : "750",
        "description_ptbr" : "PINTURA"
    },
    {
        "code" : "760",
        "description_ptbr" : "ARTES GRÁFICAS / GRAVURAS"
    },
    {
        "code" : "770",
        "description_ptbr" : "FOTOGRAFIA E ARTE POR COMPUTADOR"
    },
    {
        "code" : "780",
        "description_ptbr" : "MÚSICA"
    },
    {
        "code" : "790",
        "description_ptbr" : "ARTES CÊNICAS E RECREATIVAS/ ESPORTES"
    },
    {
        "code" : "800",
        "description_ptbr" : "LITERATURA E RETÓRICA"
    },
    {
        "code" : "810",
        "description_ptbr" : "LITERATURA AMERICANA"
    },
    {
        "code" : "820",
        "description_ptbr" : "LITERATURA INGLESA"
    },
    {
        "code" : "830",
        "description_ptbr" : "LITERATURA ALEMÃ"
    },
    {
        "code" : "840",
        "description_ptbr" : "LITERATURA FRANCESA"
    },
    {
        "code" : "850",
        "description_ptbr" : "LITERATURA ITALIANA"
    },
    {
        "code" : "860",
        "description_ptbr" : "LITERATURA ESPANHOLA"
    },
    {
        "code" : "869",
        "description_ptbr" : "LITERATURA PORTUGUESA"
    },
    {
        "code" : "870",
        "description_ptbr" : "LITERATURA LATINA"
    },
    {
        "code" : "880",
        "description_ptbr" : "LITERATURA GREGA"
    },
    {
        "code" : "890",
        "description_ptbr" : "OUTRAS LITERATURAS, LITERATURAS EM OUTROS IDIOMAS"
    },
    {
        "code" : "900",
        "description_ptbr" : "GEOGRAFIA E HISTÓRIA"
    },
    {
        "code" : "910",
        "description_ptbr" : "GEOGRAFIA E VIAGENS"
    },
    {
        "code" : "918.1",
        "description_ptbr" : "GEOGRAFIA E VIAGENS - BRASIL"
    },
    {
        "code" : "920",
        "description_ptbr" : "BIOGRAFIAS, GENEALOGIA, INSÍGNIA"
    },
    {
        "code" : "930",
        "description_ptbr" : "HISTÓRIA DO MUNDO ANTIGO ATÉ CA. 499"
    },
    {
        "code" : "940",
        "description_ptbr" : "HISTÓRIA DA EUROPA"
    },
    {
        "code" : "950",
        "description_ptbr" : "HISTÓRIA DA ÁSIA / ORIENTE"
    },
    {
        "code" : "960",
        "description_ptbr" : "HISTÓRIA DA ÁFRICA"
    },
    {
        "code" : "970",
        "description_ptbr" : "HISTÓRIA DA AMÉRICA DO NORTE"
    },
    {
        "code" : "980",
        "description_ptbr" : "HISTÓRIA DA AMÉRICA DO SUL"
    },
    {
        "code" : "981",
        "description_ptbr" : "HISTÓRIA DO BRASIL"
    },
    {
        "code" : "990",
        "description_ptbr" : "HISTÓRIA DE OUTRAS REGIÕES"
    },
    {
        "code" : "B869",
        "description_ptbr" : "LITERATURA BRASILEIRA"
    },
    {
        "code" : "B869.1",
        "description_ptbr" : "POESIA BRASILEIRA"
    },
    {
        "code" : "B869.2",
        "description_ptbr" : "TEATRO BRASILEIRO"
    },
    {
        "code" : "B869.3",
        "description_ptbr" : "FICÇÃO E CONTOS BRASILEIROS"
    },
    {
        "code" : "B869.4",
        "description_ptbr" : "ENSAIOS BRASILEIROS"
    },
    {
        "code" : "B869.5",
        "description_ptbr" : "DISCURSOS BRASILEIROS"
    },
    {
        "code" : "B869.6",
        "description_ptbr" : "CARTAS BRASILEIRAS"
    },
    {
        "code" : "B869.7",
        "description_ptbr" : "HUMOR E SÁTIRAS BRASILEIRAS"
    },
    {
        "code" : "B869.8",
        "description_ptbr" : "MISCELÂNEA DE ESCRITOS BRASILEIROS"
    }
]

EOF;

        $aux = json_decode(file_get_contents('cdd.json'), TRUE);

        foreach ($aux as $cdd)
           self::$cdd[$cdd['code']] = $cdd['description_ptbr'];

        self::$operationType           = array('03' => 'insert', '04' => 'update', '05' => 'delete');
        self::$contributorsType        = array('Autor', 'Ilustrador');
        self::$productFormDetail       = array('E101' => 'epub');
        self::$epubTechnicalProtection = array('00' => 'Sem proteção', '02' => 'Marca d\'água', '03' => 'Adobe DRM');
        self::$sizeUnit                = array('17' => 'Bytes', '18' => 'Kbytes', '19' => 'MBytes');
        self::$ageRatingClassification = array('01' => 'Exatamente', '03' => 'A partir de', '04' => 'Até');
        self::$formatFile              = array('D502' => 'jpeg', 'D503' => 'png');
        self::$languageRoleDescription = array('por' => 'Português');
    }
    
}