def test_color_blindness():
    print("Welcome to the Color Blindness Test")
    print("You will be shown descriptions of Ishihara plates.")
    print("Enter the number or pattern you see in each one.")

    # Simulate test plates and expected responses
    test_cases = [
        ("Plate 1: Orange numbers on a green background.", "6"),
        ("Plate 2: Purple pattern on a gray background.", "3"),
        ("Plate 3: Red numbers on a green background.", "5"),
        # Add more test cases as needed
    ]

    results = []
    for description, expected in test_cases:
        user_response = input(f"{description}\nWhat do you see? ")
        if user_response.lower() == expected.lower():
            results.append(True)
        else:
            results.append(False)

    # Evaluate the results
    if all(results):
        print("Based on your responses, you likely have normal color vision.")
    else:
        print("Based on your responses, you may have some form of color blindness.")
        print("Please consult an eye care professional for a proper diagnosis.")

# Run the test
test_color_blindness()
