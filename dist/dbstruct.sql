SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";

-- --------------------------------------------------------

--
-- Table structure for table `emailverify`
--

CREATE TABLE IF NOT EXISTS `emailverify` (
`ID` bigint(20) unsigned NOT NULL,
  `BAHA_ID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL_HASH` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EXPIRE_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `IP` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `verifycomplete` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
`ID` bigint(20) unsigned NOT NULL,
  `BAHA_ID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `BAHA_NAME` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `HASHED_MAIL` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `REGISTER_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `REGISTER_IP` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `MODIFY_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `MODIFY_IP` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE IF NOT EXISTS `verify` (
`ID` bigint(20) unsigned NOT NULL,
  `BAHA_ID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `BAHA_HASH` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EXPIRE_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `IP` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `verifycomplete` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailverify`
--
ALTER TABLE `emailverify`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
 ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `SNID` (`ID`), ADD UNIQUE KEY `ID` (`ID`), ADD UNIQUE KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailverify`
--
ALTER TABLE `emailverify`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
