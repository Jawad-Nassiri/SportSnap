<?php include "../public/header.html.php" ?>
<div class="container">
        <div class="form-container">
            <div class="title">
                <h1>Leg Day Tracker</h1>
            </div>
            <form action="check.php">

                <div class="input-field-box">
                    <i class="fa-solid fa-calendar-days"></i>
                    <input type="date" name="date" class="input-filed date" placeholder="Date">
                </div>

                <div class="input-field-box">
                    <i class="fa-solid fa-dumbbell"></i>
                    <input type="text" name="exercise" class="input-filed exercise" placeholder="Exercise" autocomplete="off">
                </div>

                <div class="add-set-container">
                    <div class="set-icon">
                        <i class="fa-solid fa-list-ol"></i>
                        <span>Sets</span>
                    </div>

                    <div class="set-group-container">

                        <div class="set-group">
                            <span>Set 1:</span>
                            <input type="number" name="weight" min="1" step="0.5" placeholder="Weight (kg)" required>
                            <input type="number" name="reps" min="1" placeholder="Reps" required>
                        </div>
    
                        <div class="set-group">
                            <span>Set 2:</span>
                            <input type="number" name="weight" min="1" step="0.5" placeholder="Weight (kg)" required>
                            <input type="number" name="reps" min="1" placeholder="Reps" required>
                        </div>

                        <div class="set-group">
                            <span>Set 3:</span>
                            <input type="number" name="weight" min="1" step="0.5" placeholder="Weight (kg)" required>
                            <input type="number" name="reps" min="1" placeholder="Reps" required>
                        </div>

                    </div>
                </div>
                <div class="btn-container">
                    <div class="success">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <button type="button" id="addSet"><i class="fas fa-plus"></i> Add Set</button>
                    <button type="submit"><i class="fas fa-save"></i> Save Workout</button>
                </div>
            </form>
        </div>
    </div>


    <div class="container-list">
        <!-- Date Filter Section -->
        <div class="filter-section">
            <h3>Filter Workouts</h3>
            <div class="filter-group">
                <label for="start-date">From:</label>
                <input type="date" id="start-date" class="date-input" value="2025-03-10">
            </div>
            <div class="filter-group">
                <label for="end-date">To:</label>
                <input type="date" id="end-date" class="date-input" value="2025-03-17">
            </div>
            <div class="filter-group">
                <label for="exercise-filter">Exercise:</label>
                <select id="exercise-filter" class="date-input">
                    <option value="All Exercises" selected>All Exercises</option>
                    <option value="Barbell Squat">Barbell Squat</option>
                    <option value="Leg Press">Leg Press</option>
                    <option value="Leg Extension">Leg Extension</option>
                    <option value="Bulgarian Squat">Bulgarian Squat</option>
                </select>
            </div>
            <div class="filter-group">
                <button id="apply-filter" class="filter-button">Apply Filter</button>
                <button id="reset-filter" class="filter-button reset-button">Reset</button>
            </div>
        </div>
        
        <!-- Workout Table -->
        <div class="list">
            <table class="workout-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Exercise</th>
                        <th>Weight (kg)</th>
                        <th>Reps</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="list-content">
                    <!-- Sample data -->
                    <tr>
                        <td>2025-03-16</td>
                        <td>Squat</td>
                        <td>80</td>
                        <td>10</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-16</td>
                        <td>Squat</td>
                        <td>100</td>
                        <td>8</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-16</td>
                        <td>Bench Press</td>
                        <td>90</td>
                        <td>6</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-16</td>
                        <td>Bench Press</td>
                        <td>90</td>
                        <td>6</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-16</td>
                        <td>Bench Press</td>
                        <td>90</td>
                        <td>6</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-15</td>
                        <td>Deadlift</td>
                        <td>120</td>
                        <td>5</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-14</td>
                        <td>Bench Press</td>
                        <td>85</td>
                        <td>8</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-13</td>
                        <td>Squat</td>
                        <td>90</td>
                        <td>6</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-12</td>
                        <td>Deadlift</td>
                        <td>115</td>
                        <td>6</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-03-11</td>
                        <td>Bench Press</td>
                        <td>85</td>
                        <td>8</td>
                        <td>
                            <div class="action-buttons">
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include "../public/footer.html.php" ?>

    
    


