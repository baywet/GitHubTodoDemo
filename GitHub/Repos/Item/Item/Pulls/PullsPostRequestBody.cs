using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Repos.Item.Item.Pulls {
    public class PullsPostRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.</summary>
        public string Base { get; set; }
        /// <summary>The contents of the pull request.</summary>
        public string Body { get; set; }
        /// <summary>Indicates whether the pull request is a draft. See &quot;[Draft Pull Requests](https://help.github.com/en/articles/about-pull-requests#draft-pull-requests)&quot; in the GitHub Help documentation to learn more.</summary>
        public bool? Draft { get; set; }
        /// <summary>The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.</summary>
        public string Head { get; set; }
        /// <summary>The issue property</summary>
        public int? Issue { get; set; }
        /// <summary>Indicates whether [maintainers can modify](https://help.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.</summary>
        public bool? Maintainer_can_modify { get; set; }
        /// <summary>The title of the new pull request.</summary>
        public string Title { get; set; }
        /// <summary>
        /// Instantiates a new pullsPostRequestBody and sets the default values.
        /// </summary>
        public PullsPostRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static PullsPostRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullsPostRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"base", n => { Base = n.GetStringValue(); } },
                {"body", n => { Body = n.GetStringValue(); } },
                {"draft", n => { Draft = n.GetBoolValue(); } },
                {"head", n => { Head = n.GetStringValue(); } },
                {"issue", n => { Issue = n.GetIntValue(); } },
                {"maintainer_can_modify", n => { Maintainer_can_modify = n.GetBoolValue(); } },
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
            writer.WriteBoolValue("draft", Draft);
            writer.WriteStringValue("head", Head);
            writer.WriteIntValue("issue", Issue);
            writer.WriteBoolValue("maintainer_can_modify", Maintainer_can_modify);
            writer.WriteStringValue("title", Title);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
