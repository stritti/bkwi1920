
CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `creatorid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` longtext NOT NULL,
  `price` int(255) NOT NULL
);



CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `creatorid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` longtext NOT NULL,
  `price` int(255) NOT NULL
);



INSERT INTO `offer` (`id`, `creatorid`, `title`, `createdate`, `description`, `price`) VALUES
(1, 1, 'Powerbank', '2019-11-20 10:01:01', 'War 2 Jahre in Gebrauch, funktioniert noch einwandfrei. Leichte Gebrauchsspuren', 4.99);

INSERT INTO `offer` (`id`, `creatorid`, `title`, `createdate`, `description`, `price`) VALUES
(2, 1, 'HP Laptop', '2019-11-20 10:01:01', 'Verkaufen unseren Laptop von Medion.
Er hat 18 Zoll und 500 GB Festplatte und 4 GB RAM.

Er hat lediglich rechts unten eine kleine Macke, aber läuft sehr gut.

Er hat leicht Gebrauchtspuren aber ist in einen guten Zustand.
Das Display ist heile.', 295);

INSERT INTO `offer` (`id`, `creatorid`, `title`, `createdate`, `description`, `price`) VALUES
(3, 1, 'Der Familienfluch', '2019-11-20 10:01:01', 'Wie neu, keine Gebrauchspuren', 2.99);

INSERT INTO `offer` (`id`, `creatorid`, `title`, `createdate`, `description`, `price`) VALUES
(4, 1, 'YEEZY Boost 350 V2', '2019-11-20 10:01:01', 'Ich verkaufe schwerenherzens meine originalen Yeezys - Größe 45 - Zustand: leichte Gebrauchspuren', 350);


ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `offer`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `offer`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

