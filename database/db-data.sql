use voting_app;

-- candidates  
-- election_candidates
-- election_votes
-- elections
-- users

INSERT INTO users (username, password) VALUES ('admin', 'password');
INSERT INTO candidates (name) VALUES ('shakib'), ('mansour'), ('aafif'), ('jolie');

INSERT INTO candidate_votes (user_id, candidate_id) VALUES (1,1), (1,2), (1,1), (1,3);
