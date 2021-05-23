CREATE VIEW id_full_detail as
SELECT
    e.*,
    f.english AS dist_eng,
    f.nepali AS dist_nep
FROM
    (
    SELECT
        c.*,
        d.english AS birth_dist_eng,
        d.nepali AS birth_dist_nep
    FROM
        (
        SELECT
            a.*,
            b.nepali AS muni_name_nep,
            b.english AS muni_name_eng,
            b.district_id AS muni_did
        FROM
            (
            SELECT
                i.*,
                l.nepali AS birth_muni_name_nep,
                l.english AS birth_muni_name_eng,
                l.district_id AS birth_muni_did
            FROM
                id_detail i
            INNER JOIN local_level l ON
                i.birth_muni = l.id
        ) a
    INNER JOIN local_level b ON
        a.muni = b.id
    ) c
INNER JOIN district d ON
    c.birth_muni_did = d.id
) e
INNER JOIN district f ON
    e.muni_did = f.id;
