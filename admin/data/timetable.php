<?php

// All timetables
function getAllTimetables($conn)
{
    $sql = "SELECT * FROM timetable";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $timetables = $stmt->fetchAll();
        return $timetables;
    } else {
        return 0;
    }
}

// Get Section by ID
function getTimetableById($timetable_id, $conn)
{
    $sql = "SELECT * FROM timetable
           WHERE timetable_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$timetable_id]);

    if ($stmt->rowCount() == 1) {
        $timetable = $stmt->fetch();
        return $timetable;
    } else {
        return 0;
    }
}

// DELETE
function removeSection($id, $conn)
{
    $sql  = "DELETE FROM section
           WHERE timetable_id=?";
    $stmt = $conn->prepare($sql);
    $re   = $stmt->execute([$id]);
    if ($re) {
        return 1;
    } else {
        return 0;
    }
}
