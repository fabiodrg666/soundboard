DROP TABLE IF EXISTS Music;
CREATE TABLE Music (
	id_music 	INTEGER PRIMARY KEY AUTOINCREMENT,
	name 		TEXT NOT NULL,
	description TEXT DEFAULT "",
	filename 	TEXT NOT NULL,
	isNSFW 		INTEGER NOT NULL, /* Boolean, either 1 or 0 */
	isApproved  INTEGER NOT NULL DEFAULT 0, /* Boolean telling wether the song has been approved or not */
	CONSTRAINT InvalidBooleanValues CHECK ( 
		(isNSFW = 0 OR isNSFW = 1) AND
		(isApproved = 0 OR isApproved = 1)
	) 
);
