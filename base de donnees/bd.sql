Base de données : `microfinance`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `login_cl` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `nom_cl` varchar(255) NOT NULL,
  `prenom_cl` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `numero_piece` varchar(50) NOT NULL,
  `nature_piece` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `signature` varchar(50) NOT NULL,
  `numero_compte` varchar(50) NOT NULL,
  `solde_compte` double NOT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `taille` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id_employe` int(11) NOT NULL,
  `login_em` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `nom_em` varchar(255) NOT NULL,
  `prenom_em` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `numero_piece` varchar(50) NOT NULL,
  `nature_piece` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `id_pret` int(11) NOT NULL,
  `code_pret` varchar(50) NOT NULL,
  `montant_pret` double NOT NULL,
  `date_pret` date NOT NULL,
  `echeance_pret` date NOT NULL,
  `relance` varchar(50) DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `remboursement`
--

CREATE TABLE `remboursement` (
  `id_rbs` int(11) NOT NULL,
  `montant_verse` double NOT NULL,
  `date_versement` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_pret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `code_transaction` varchar(50) NOT NULL,
  `date_transaction` date DEFAULT NULL,
  `montant_transaction` double NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_employe`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`id_pret`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_employe` (`id_employe`);

--
-- Index pour la table `remboursement`
--
ALTER TABLE `remboursement`
  ADD PRIMARY KEY (`id_rbs`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_pret` (`id_pret`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `id_client` (`id_client`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `pret_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `pret_ibfk_2` FOREIGN KEY (`id_employe`) REFERENCES `employe` (`id_employe`);

--
-- Contraintes pour la table `remboursement`
--
ALTER TABLE `remboursement`
  ADD CONSTRAINT `remboursement_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `remboursement_ibfk_2` FOREIGN KEY (`id_pret`) REFERENCES `pret` (`id_pret`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employe` (`id_employe`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;