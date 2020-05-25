--
-- PostgreSQL database dump
--

-- Dumped from database version 10.12 (Ubuntu 10.12-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.12 (Ubuntu 10.12-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: grupo95
--

CREATE TABLE public.usuarios (
    usuario_id integer NOT NULL,
    username character varying(200),
    nombre character varying(200),
    correo character varying(200),
    direccion character varying(200),
    password character varying(200)
);


ALTER TABLE public.usuarios OWNER TO grupo95;

--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: grupo95
--

COPY public.usuarios (usuario_id, username, nombre, correo, direccion, password) FROM stdin;
36	JessicaGraham	Jessica Graham	Jessica.Graham@gmail.com	65431 Harris Plaza Apt. 658 Hillhaven, NV 54338	dummypassword
12	Mrs.Jennifer	Mrs. Jennifer Herrera	Mrs..Jennifer@gmail.com	789 Cynthia Canyon Suite 606 Robintown, MA 16782	dummypassword
44	OscarCaldwell	Oscar Caldwell	Oscar.Caldwell@gmail.com	982 Andrew Underpass Suite 779 New Michaelshire, OH 97878	dummypassword
32	DarrenGray	Darren Gray	Darren.Gray@gmail.com	95058 Powers Island Johnsonside, WA 89838	dummypassword
5	MarkDalton	Mark Dalton	Mark.Dalton@gmail.com	876 Gabriel Plaza Port Brandonburgh, DC 44886	dummypassword
35	JamesBrooks	James Brooks	James.Brooks@gmail.com	701 Tonya Hills Brittanyport, NJ 91013	dummypassword
17	VincentLeonard	Vincent Leonard	Vincent.Leonard@gmail.com	08849 Kevin Rapids New Baileytown, WY 45966	dummypassword
49	AaronEstrada	Aaron Estrada	Aaron.Estrada@gmail.com	48764 Clark Ramp Bradfordmouth, UT 55780	dummypassword
24	NicholasDunn	Nicholas Dunn	Nicholas.Dunn@gmail.com	61079 Thomas Shore Gardnerton, IN 15710	dummypassword
29	SheilaHubbard	Sheila Hubbard	Sheila.Hubbard@gmail.com	USNV Reyes FPO AE 86453	dummypassword
15	VernonGonzales	Vernon Gonzales	Vernon.Gonzales@gmail.com	8703 Amy Pike Garciachester, IA 27013	dummypassword
8	GregoryJones	Gregory Jones	Gregory.Jones@gmail.com	715 John Falls Apt. 167 Alyssashire, KY 79697	dummypassword
14	MeredithLindsey	Meredith Lindsey	Meredith.Lindsey@gmail.com	0125 Pamela Roads Suite 573 Robertview, TN 81130	dummypassword
2	ChadHolloway	Chad Holloway	Chad.Holloway@gmail.com	075 Samantha Mews Jeremiahberg, MD 35545	dummypassword
48	KennethMiller	Kenneth Miller	Kenneth.Miller@gmail.com	60602 Henderson Fords Apt. 764 North Frankhaven, HI 85863	dummypassword
3	PhillipHall	Phillip Hall	Phillip.Hall@gmail.com	9349 Petersen Meadows Jonesland, WY 40858	dummypassword
23	CharlesEsparza	Charles Esparza	Charles.Esparza@gmail.com	0680 Adam Key South Chad, HI 15004	dummypassword
18	JoshuaHansen	Joshua Hansen	Joshua.Hansen@gmail.com	Unit 9153 Box 5256 DPO AA 17953	dummypassword
40	JasonKemp	Jason Kemp	Jason.Kemp@gmail.com	51005 Timothy Underpass Woodsburgh, VA 21674	dummypassword
26	BrianDuke	Brian Duke	Brian.Duke@gmail.com	400 Thompson Springs Port Amyland, AR 65691	dummypassword
9	KarenConley	Karen Conley	Karen.Conley@gmail.com	1364 Michael Hill Suite 750 Madisontown, CT 37329	dummypassword
4	EmilyJackson	Emily Jackson	Emily.Jackson@gmail.com	PSC 0039, Box 7414 APO AE 01858	dummypassword
16	JackMyers	Jack Myers	Jack.Myers@gmail.com	3556 Tamara Road Apt. 376 North Maryshire, NC 83844	dummypassword
45	DavidRandall	David Randall	David.Randall@gmail.com	PSC 0949, Box 2041 APO AA 71725	dummypassword
20	JustinGonzalez	Justin Gonzalez	Justin.Gonzalez@gmail.com	6493 Davis Walks Suite 766 New Robert, ME 32152	dummypassword
38	DebraFranklin	Debra Franklin	Debra.Franklin@gmail.com	056 Richard Heights Suite 943 Port Kristibury, SD 75378	dummypassword
10	MatthewRandall	Matthew Randall	Matthew.Randall@gmail.com	639 Theresa Causeway New Kimberly, OH 15747	dummypassword
41	JenniferSmith	Jennifer Smith	Jennifer.Smith@gmail.com	783 Kimberly Court Apt. 695 East Sharon, TN 15847	dummypassword
34	FrancesHenry	Frances Henry	Frances.Henry@gmail.com	USNS Fitzpatrick FPO AP 74170	dummypassword
31	CourtneyGarcia	Courtney Garcia DDS	Courtney.Garcia@gmail.com	794 James Freeway Mathewsfurt, MI 18712	dummypassword
25	MiguelSantiago	Miguel Santiago	Miguel.Santiago@gmail.com	Unit 8487 Box 8033 DPO AE 08178	dummypassword
46	SamuelSanders	Samuel Sanders	Samuel.Sanders@gmail.com	6968 Harrison Meadows New Meganland, AL 47398	dummypassword
33	Mr.Stanley	Mr. Stanley Davis	Mr..Stanley@gmail.com	47013 Caldwell Parkway Apt. 925 Davidsonmouth, OK 87204	dummypassword
43	DennisRios	Dennis Rios	Dennis.Rios@gmail.com	008 Rowland Plains Jacksonport, NH 34492	dummypassword
50	JuanHicks	Juan Hicks	Juan.Hicks@gmail.com	80203 Walter Estates Suite 342 Port Dana, WA 52677	dummypassword
27	MichaelHernandez	Michael Hernandez	Michael.Hernandez@gmail.com	72374 Sandra Haven New Andrewstad, NV 94835	dummypassword
1	ChristinaBrown	Christina Brown	Christina.Brown@gmail.com	145 Fisher Plain Port Phillipville, OH 56904	dummypassword
13	SabrinaWang	Sabrina Wang	Sabrina.Wang@gmail.com	2566 Emily Ports Suite 151 Jamesshire, LA 84360	dummypassword
22	JohnMorrow	John Morrow	John.Morrow@gmail.com	3115 Ronald Radial Suite 453 Carrfort, OK 90593	dummypassword
39	GeorgeStout	George Stout	George.Stout@gmail.com	50663 Stacy Isle Georgefurt, PA 81787	dummypassword
37	ShannonTucker	Shannon Tucker	Shannon.Tucker@gmail.com	2643 Brian Lakes Aguirrebury, CA 70775	dummypassword
47	EricMarshall	Eric Marshall	Eric.Marshall@gmail.com	7729 Bradford Springs Apt. 296 Christieland, AL 52634	dummypassword
30	SheilaHolmes	Sheila Holmes	Sheila.Holmes@gmail.com	4518 Johnson Throughway Mayshaven, KS 69102	dummypassword
6	JohnMitchell	John Mitchell	John.Mitchell@gmail.com	7247 April Ville Suite 533 West Christinashire, NM 20136	dummypassword
11	MatthewWalker	Matthew Walker	Matthew.Walker@gmail.com	9994 Denise Mills Suite 245 Samanthashire, ID 56928	dummypassword
21	MatthewHardy	Matthew Hardy	Matthew.Hardy@gmail.com	7653 Michelle Extensions Apt. 073 New Donald, AZ 84920	dummypassword
19	MirandaSchroeder	Miranda Schroeder	Miranda.Schroeder@gmail.com	99833 Jason Unions Suite 828 Gabrielmouth, VT 17200	dummypassword
28	LoriCampos	Lori Campos	Lori.Campos@gmail.com	429 Angela Pike Apt. 389 Port Wanda, OR 44178	dummypassword
42	MarcoCurtis	Marco Curtis	Marco.Curtis@gmail.com	10221 Paula Highway Suite 342 Garrisonmouth, HI 48762	dummypassword
7	NicholasHoward	Nicholas Howard	Nicholas.Howard@gmail.com	970 Patel Fort Callahanland, AZ 29356	dummypassword
51	danustilovsky	Dan Ustilovsky	diustilovsky@uc.cl	Valle del monasterio 2897, Lo Barnechea	$2y$10$lTXl4q34TMzhfmSmihJRFeF7osfi5f3DYfUstyRvWDfpMqfGmn12G
52	Junchai	Juan	juanchojimenez9@gmail.com	Hualtitz 200	$2y$10$Z5TNmiJyPQwVEn0FemfHT.ploKIOUh0p6Sxzi/UW1jqMXrFHFGjq2
\.


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo95
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (usuario_id);


--
-- PostgreSQL database dump complete
--

