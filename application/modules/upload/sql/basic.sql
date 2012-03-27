-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` smallint(9) NOT NULL,
  `name` varchar(64) default NULL,
  `obj_id` smallint(9) default NULL,
  `obj_class` varchar(64) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` smallint(9) NOT NULL,
  `path` varchar(64) default NULL,
  `name` varchar(64) default NULL,
  `type` varchar(32) default NULL,
  `album_id` smallint(9) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;