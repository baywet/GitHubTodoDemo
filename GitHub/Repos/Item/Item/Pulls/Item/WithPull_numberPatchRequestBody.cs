using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item {
    public class WithPull_numberPatchRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.</summary>
        public string Base { get; set; }
        /// <summary>The contents of the pull request.</summary>
        public string Body { get; set; }
        /// <summary>Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.</summary>
        public bool? Maintainer_can_modify { get; set; }
        /// <summary>State of this Pull Request. Either `open` or `closed`.</summary>
        public WithPull_numberPatchRequestBody_state? State { get; set; }
        /// <summary>The title of the pull request.</summary>
        public string Title { get; set; }
        /// <summary>
        /// Instantiates a new WithPull_numberPatchRequestBody and sets the default values.
        /// </summary>
        public WithPull_numberPatchRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static WithPull_numberPatchRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new WithPull_numberPatchRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"base", n => { Base = n.GetStringValue(); } },
                {"body", n => { Body = n.GetStringValue(); } },
                {"maintainer_can_modify", n => { Maintainer_can_modify = n.GetBoolValue(); } },
                {"state", n => { State = n.GetEnumValue<WithPull_numberPatchRequestBody_state>(); } },
                {"title", n => { Title = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("base", Base);
            writer.WriteStringValue("body", Body);
            writer.WriteBoolValue("maintainer_can_modify", Maintainer_can_modify);
            writer.WriteEnumValue<WithPull_numberPatchRequestBody_state>("state", State);
            writer.WriteStringValue("title", Title);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
